   #!/bin/bash


     show_usage()
          {
              echo "systeme-monitor : $0 [-h|--help] [-T] [-t] [-n] [-N] [-d] [-m] [-s] chemin.."
              exit 1
          }
               
                 export -f show_usage


    surveillerCharge()
         {
           iostat -c 5  3

         }

                export -f surveillerCharge


    afficherListePro()
        {
              ps -o user,pid,ppid,%mem,%cpu,comm
        }

                export -f afficherListePro


     afficherHelp()
        {
              while read line  
              do   
                 echo -e "$line"
  
              done < help.txt
        }
                   export -f afficherHelp


     afficherAuteur()
        {
              echo "Auteurs : Siwar Boukhari et Abir Khelifi"
              echo "Version : 0.1"
        }

                   export -f afficherAuteur


     afficherRamMeminfo()
        {

    	     MemFree=$(cat /proc/meminfo | grep MemFree);
             MemFree=${MemFree:17}
             MemAvailable=$(cat /proc/meminfo | grep MemAvailable);
             MemAvailable=${MemAvailable:17}
             #echo "$MemAvailable"
             SwapFree=$(cat /proc/meminfo | grep SwapFree);
             SwapFree=${SwapFree:18}
             #echo "$SwapFree"
             SwapTotal=$(cat /proc/meminfo | grep SwapTotal);
             SwapTotal=${SwapTotal:18}
             #echo "$SwapTotal"
             echo -n "MemFree   MemAvailable SwapFree SwapAvailable"
             echo "  "
             echo -n "$MemFree $MemAvailable $SwapFree $SwapTotal"
             echo "  "

         }
                       export -f afficherRamMeminfo

      afficherRamFree()

         {
              free -h
         }
                       export -f afficherRamFree


     #preparation d'interface graphique

      cmdmain=(
              yad
                --center --width=400
                --image="gtk-dialog-info"
                --title="Menu"
                --text="select an option."
                --button="Exit":1
                --form
                --field="Show usage":btn "bash -c show_usage "  
                --field="afficherRamFree":btn "bash -c afficherRamFree " 
                --field="afficherRamMeminfo":btn "bash -c afficherRamMeminfo"
                --field="surveillerCharge":btn "bash -c surveillerCharge"
                --field="afficherListePro":btn "bash -c afficherListePro"
                --field="afficherMsgSurveillance":btn "bash -c afficherMsgSurveillance"
                --field="HELP":btn "bash -c afficherHelp"
                --field="author and version":btn "bash -c afficherAuteur"

              )
     ########fonction qui ouvre fenetre yad

       interface_graphique()

        {
	    while true; do
	            "${cmdmain[@]}"
	             s=$?
	       case $s in
	        1|252) break;;
	    esac
	done
        }


       afficherMenuClassic()

       {

            while [[ $choix -ne 9 ]]
                 do
                  	echo "Taper:"
                        echo "1) Lancer la fonction afficherRamFree() "
                        echo "2) Lancer la fonction afficherRamMeminfo() "
                        echo "3) Lancer la fonction surveillerCharge()"
                        echo "4) Lancer la fonction afficherListePro()"
                        echo "5) Lancer la fonction afficherMsgSurveillance()"
                        echo "6) Lancer la fonction afficherHelp()"
                        echo "7) Lancer la fonction interface_graphique()"
                        echo "8) Lancer la fonction afficherAuteur()"
                        echo "9) QUitter"
                 read -p "donner un choix:" choix

       	   case $choix in
                1) afficherRamFree
                ;;
                2) afficherRamMeminfo $@
                ;;
                3) surveillerCharge $@
                ;;
                4) afficherListePro $@
                ;;
                5) afficherMsgSurveillance $@
                ;;
                6) afficherHelp $@
                ;;
                7) interface_graphique $@
                 ;;
                8) afficherAuteur $@
                 ;;

                9) exit
                ;;
                *) echo "Veuillez de choisir entre 1, 2, 3, 4, 5, 6, 7, 8 ou 9  Uniquement"
            esac
          sleep 9
        clear
      done

            }
