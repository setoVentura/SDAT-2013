<?php
/* @var $this RuleController */
/* @var $model Rule */

Yii::app()->bootstrap->register();
/*
$this->breadcrumbs=array(
	'Rules'=>array('index'),
	'Create',
);
*/
$this->menu=array(
	array('label'=>'List Rule', 'url'=>array('index')),
	array('label'=>'Manage Rule', 'url'=>array('admin')),
);
?>

<h1>Create Rule</h1>

<?php //$this->renderPartial('_form', array('model'=>$model)); ?> 

<html>
<head>
    <title>Senqual Monotoring Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Project name',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('index') ),
                array('label'=>'Dashboard', 'url'=>'#'),
                array('label'=>'Monitor', 'url'=>'#'),
                array('label'=>'Rules', 'url'=>'#'),
                array('label'=>'Sensors', 'url'=>'#'),
                array('label'=>'Profile', 'url'=>'#'),
                array('label'=>'About Us'), 'url'=>'#'),)),));
?>


        <div class="container">
            <h1>Rules Page</h1>
            <div class="row-fluid">
                <div class="span6">
                    <form class="well">
                    <label>
                        New Rule</label>
                    <input type="text" class="span6" placeholder="Enter unique identifer" />
                    </form>
                </div>
                <div class="span6">
                    <form class="well">
                    <label>Existing Rule</label>
                    <select name="existing_rule" class="span6" placeholder="Select rule Identifer" />
                    <option value="one"><?php Rule::model()->findAll(); ?></option>
                    </select>
                    </form>
                </div>
                 <p>Natural Language Description</p>
                 <div class="row-fluid">
                 <div class="span6">
                   <!-- <form class="well"> -->
  
  

  <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array('id'=>'horizontalForm','type'=>'horizontal',)); ?>
 
				<fieldset>
 
					<label>RULE DURATION</label>
 
    
						<?php //echo $form->dropDownListRow($model,'dropdown', array('Something', '1', '2', '3', '4', '5')); ?>
    
 
					</fieldset>
				
	
					<?php $this->endWidget(); ?>
					 
					 
					 
					<!--
                    <select name="rule_duration" class="span6" />
                    <option value="placeholder">Rule Duration</option>
                    <option value="one">All Readings</option>
                    <option value="two">All Readings After L</option>
                    <option value="three">All readings Before R</option> 
                    <option value="three">All readings Between L and R</option> 
                    </select> -->
                   <!-- </form>  -->
					</div>
					
					
					

                                     <div class="span6">
                    <form class="well">
                    <label>RULE DEFINITION</label>
                    <select name="rule_definition" class="span6" />
                    <option value="placeholder">Universality</option>
                    <option value="one">Absence</option>
                    <option value="two">Existence</option>
                    <option value="three">Response</option> 
                    </select>
                    </form> </div>
                    </div>
             </div>

                 <table class="table table-bordered">
                 </table>


        </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>