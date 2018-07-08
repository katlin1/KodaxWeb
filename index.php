
<!DOCTYPE html>
<html>
<title>Principal |KODAX.Clinical|</title>
<body background="imagenkodaxweb/fondo2.jpg"></body>
<?php
    require ("conexion.php");
    $resultado ="SELECT * FROM categorias";
    $stmt=$conexion->query($resultado);
    $rows = $stmt->fetchAll();
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
</style>

<body>


</nav>

<!-- Top menu -->

<div class="w3-top">
    <div class="w3-black w3-xlarge" style="max-width:1300px;margin:auto">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">KodaxClinical</div>
        <div class="w3-right w3-padding-16">Iniciar Sesión</div>
        <div class="w3-center w3-padding-16">Registro</div>
    </div>
</div>



<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php
        $n=1;
        foreach ($rows as $s):
    ?>
        <div class="w3-quarter">
            <img src="imagenes/<?php echo $s['imagen']; ?>" alt="general" style="width:100%">
            <h3><?php echo $s['titulo']; ?></h3>
            <p><?php echo $s['descripcion']; ?></p>
        </div>
     <?php
        if($n==4||$n==8){
     ?>
            </div>
     <?php
        }
        if($n==4){
        ?>
            <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <?php
        }
        $n++;
        endforeach;
    ?>


    <!-- Second Photo Grid-->
    <!--<div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <img src="imagenkodaxweb/iconocardi.png" alt="cardiología" style="width:100%">
            <h3>¿Necesitas un cardiologo(a)?</h3>
            <p>La cardiología es la rama
                de la medicina encargada del estudio, diagnóstico y tratamiento de las enfermedades del corazón
                y del aparato circulatorio.</p>
        </div>
        <div class="w3-quarter">
            <img src="imagenkodaxweb/iconoderma.png" alt="dermatología" style="width:100%">
            <h3>¿Necesitas un dermatologo(a)?</h3>
            <p>La dermatología es la especialidad médica encargada del estudio de la estructura y función
                de la piel, así como de las enfermedades que la afectan, su diagnóstico, prevención y tratamiento.</p>
        </div>
        <div class="w3-quarter">
            <img src="imagenkodaxweb/iconooto.png" alt="otorrinolaringología" style="width:100%">
            <h3>¿Necesitas un otorrinolaringologo(a)?</h3>
            <p>La otorrinolaringología (ORL) es la especialidad médica que se encarga del estudio de las enfermedades del oído,
                de las vías respiratorias superiores y parte de las inferiores (nariz, senos paranasales, faringe y laringe).</p>
        </div>
        <div class="w3-quarter">
            <img src="imagenkodaxweb/iconopedia.png" alt="pediatría" style="width:100%">
            <h3>¿Necesitas un pediatra?</h3>
            <p>Parte de la medicina que se ocupa del estudio del crecimiento y el desarrollo de los
                niños hasta la adolescencia, así como del tratamiento de sus enfermedades.</p>
        </div>
    </div>-->



    <!-- Footer -->
    <footer class="w3-row-padding w3-padding-32">


    </footer>

    <!-- End page content -->
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>


</body>
</html>
