  #!/bin/bash
    source fonction.sh



      if [ $# -ge 1 ];then

           while getopts "m:jfcplhgv" option
           do
	      case $option in

		  m) if [ $OPTARG = "classic" ];then

			afficherMenuClassic
		     fi

		     ;;


                  j)    afficherRamFree
		     ;;

                  f)    afficherRamMeminfo
		
                     ;;
	          c)    surveillerCharge
		     ;;
 
		  p) 
                        afficherListePro 
		     ;;


                  l)   afficherMsgSurveillance 

                     ;;

                  h)   afficherHelp
                     ;;

                  g)   interface_graphique
                     ;;

                  v)   afficherAuteur
                     ;;

		*) echo "Uniquement les options -j -f -p -c -g -l -v -h -m -k <arg> peuvent être utilisé"
	     esac

           done

                   else echo "Pas d'args : $MSG"

                   show_usage $0
        fi
