<?
class PERSON{
  var $name;
  var $surname;
  var $patronymic;
  var $gender;
  ConST genderMale = 1;
  const genderFemale = -1;
  const genderUndefined = 0;
  function __construct($name, $surname, $patronymic){
    $this->name = $name; $this->surname = $surname;
    if ($patronymic!=null){
       $this->patronymic = $patronymic;}
      $patronymicEnding = mb_substr($patronymic, -3);
      if ($patronymicEnding == 'вич' || $patronymicEnding == 'ьич' || $patronymicEnding == 'тич' || $patronymicEnding == 'глы') {
          $this->gender = self::genderMale;
      } elseif ($patronymicEnding == 'вна' || $patronymicEnding == 'чна' || $patronymicEnding == 'шна' || $patronymicEnding == 'ызы') {
          $this->gender = self::genderFemale; }else{
          $this->gender = self::genderUndefined;}}
  function GETFIO(){return $this->surname . ' ' . $this->name . ' ' . $this->patronymic . ' ';}
  function GETGENDER(){
    if($this->gender === 1){return 'male';};
    if($this->gender === 0){return 'undefined';};
    if($this->gender === -1){return 'female';};}
  function GETGENDERSYMBOL(){
    if($this->gender === 1){return '♂';};
    if($this->gender === 0){return '😎';};
    if($this->gender === -1){return '♀';};
}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 3.2.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<? $new_person = new PERSON('Иван', 'Иванов', 'Иванович') ?>
<h2><span class="gender-<?php echo $new_person->GETGENDER()?>"><?php echo $new_person->GETGENDERSYMBOL()?></span> <?php echo $new_person->GETFIO() ?></h2>
</body>
</html>

