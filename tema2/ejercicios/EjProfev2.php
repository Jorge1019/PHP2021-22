<?php
if ($_GET["a"] >= 1) {
    echo "  <input type='checkbox' name='a' value='1' checked='checked'/><br>";
}
if ($_GET["a"] >= 2) {
    echo "      <input type='checkbox' name='a' value='2' checked='checked'/><br>";
} else {
    echo " <input type='checkbox' name='a' value='2'/><br>";
}
if ($_GET["a"] >= 3) {
    echo " <input type='checkbox' name='a' value='3' checked='checked' /><br>";
} else {
    echo " <input type='checkbox' name='a' value='3'/><br>";
}
if ($_GET["a"] >= 4) {
    echo " <input type='checkbox' name='a' value='4' checked='checked'/><br>";
} else {
    echo " <input type='checkbox' name='a' value='4'/><br>";
}
if ($_GET["a"] >= 5) {
    echo " <input type='checkbox' name='a' value='5' checked='checked'/><br>";
} else {
    echo " <input type='checkbox' name='a' value='5'/><br>";
} /*
   * switch ($_GET["a"]) {
   *
   * case "1":
   * echo "
   * <input type='checkbox' name='a' value='1' checked='checked'/><br>
   * <input type='checkbox' name='a' value='2'/><br>
   * <input type='checkbox' name='a' value='3'/><br>
   * <input type='checkbox' name='a' value='4'/><br>
   * <input type='checkbox' name='a' value='5'/><br>";
   * break;
   * case "2":
   * echo "
   * <input type='checkbox' name='a' value='1' checked='checked'/><br>
   * <input type='checkbox' name='a' value='2' checked='checked'/><br>
   * <input type='checkbox' name='a' value='3'/><br>
   * <input type='checkbox' name='a' value='4'/><br>
   * <input type='checkbox' name='a' value='5'/><br>";
   * break;
   * case "3":
   * echo "
   * <input type='checkbox' name='a' value='1' checked='checked'/><br>
   * <input type='checkbox' name='a' value='2' checked='checked'/><br>
   * <input type='checkbox' name='a' value='3' checked='checked'/><br>
   * <input type='checkbox' name='a' value='4' /><br>
   * <input type='checkbox' name='a' value='5' /><br>";
   * break;
   * case "4":
   * echo "
   * <input type='checkbox' name='a' value='1' checked='checked'/><br>
   * <input type='checkbox' name='a' value='2' checked='checked'/><br>
   * <input type='checkbox' name='a' value='3' checked='checked'/><br>
   * <input type='checkbox' name='a' value='4' checked='checked'/><br>
   * <input type='checkbox' name='a' value='5' /><br>";
   * break;
   * case "5":
   * echo "
   * <input type='checkbox' name='a' value='1' checked='checked'/><br>
   * <input type='checkbox' name='a' value='2' checked='checked'/><br>
   * <input type='checkbox' name='a' value='3' checked='checked'/><br>
   * <input type='checkbox' name='a' value='4' checked='checked'/><br>
   * <input type='checkbox' name='a' value='5' checked='checked'/><br>";
   * break;
   * hacer 9 10 11 12
   * }
   */
?>