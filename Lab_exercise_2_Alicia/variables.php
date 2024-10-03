<!DOCTYPE html>
<html>
    <head>
        <title>OOP PHP</title>
    </head>
<body>

<?php
include 'control_flow.php';
include 'functions_array.php';
class Variables{
    var $name;
    var $birthdate;
    var $datediffage;
    var $age_thn, $age_bln, $age_hari;
    var $sex;
    var $gpa;
    var $isStudent;

    function __construct($name, $birthdate, $sex, $gpa, $isStudent) {
        $this->name = $name;
        $this->birthdate = $birthdate;
        $this->sex = $sex;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
        $this->datediffage = date_diff(date_create(date("Y-m-d")), date_create($this->birthdate));

        $this->age_thn = $this->datediffage -> y;
        $this->age_bln = $this->datediffage -> m;
        $this->age_hari = $this->datediffage -> d;
    }

    function display() {
        echo "Nama: $this->name<br>Umur: $this->age_thn tahun $this->age_bln bulan $this->age_hari hari<br>Gender: $this->sex<br>GPA: $this->gpa<br>Mahasiswa aktif: $this->isStudent<br>";
    }
}
$controlflow = new Control_flow();
$student1 = new Variables('Alicia', '2005-12-19', 'Female', 4.0, true);
$student1->display();
$controlflow->checkAge($student1->age_thn);
echo "<br>";

$student2 = new Variables('Chaiden', '2005-09-11', 'Male', 4.0, true);
$student2->display();
$controlflow->checkAge($student2->age_thn);
echo "<br>";

$student3 = new Variables('Leo', '2006-04-01', 'Male', 4.0, true);
$student3->display();
$controlflow->checkAge($student3->age_thn);
echo "<br>";

$student4 = new Variables('Feli', '2005-01-21', 'Female', 4.0, true);
$student4->display();
$controlflow->checkAge($student4->age_thn);
echo "<br>";

$student5 = new Variables('Aurel', '2006-12-30', 'Female', 4.0, true);
$student5->display();
$controlflow->checkAge($student5->age_thn);
echo "<br>";

$students = [$student1->name, $student2->name, $student3->name, $student4->name, $student5->name];
$functions = new function_array();
$functions->greet($students);

?>
</body>
</html>