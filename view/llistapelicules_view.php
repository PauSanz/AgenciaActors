<?php
include('llistatpelicules.php');
?>
<style type="text/css">

    #sugerencias {width:200px; border:1px solid #f6ddcc; display:none; margin-left: 38px;}
    #sugerencias ul {list-style: none; margin: 0; padding: 0; font-size:.85em;}
    #sugerencias ul li {padding: .2em; border-bottom: 1px solid silver;}
    .seleccionado {font-weight:bold; background-color: #f6ddcc;}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <h1 class="page-header text-center">Pel·lícules</h1>
        </div>
        <div class="col-sm-3 centrevertical margtop">
            <div class="input-group ">
                <span class="input-group-addon"><i class="fa fa-search fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" id="buscar" name="buscar" id="name"  placeholder="Buscar" value="<?php echo (isset($x) ? $x->nom : '') ?>"/>
            </div>
            <div id="sugerencias" style="display: none;"></div>
        </div>
    </div>
    <div class="row"> 
        <?php mostrarPelis(); ?>
    </div>
</div>
