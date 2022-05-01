<?php // content="text/plain; charset=utf-8"
include ("src/jpgraph.php"); //des includes
include ("src/jpgraph_pie.php");
include ("src/jpgraph_pie3d.php");
// Some data
$data = array(40,60);

// Create the Pie Graph. 
$graph = new PieGraph(350,250); //pour creer notre pie 

$theme_class=new VividTheme;
$graph->SetTheme( $theme_class);

// Set A title for the plot
$graph->title->Set("A Simple Pie Plot"); //titre du graphic 
//$graph->SetBox(true);

// Create 
$p1 = new PiePlot($data);
$graph->Add($p1); //on ajoute p1 dans le graphic 
$p1->SetTheme("water");

$p1->ShowBorder();
$p1->SetCenter(0.5,0.4);
$p1->SetColor('red');
//$p1->ExploadeAll();
//$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$graph->Stroke();

?>