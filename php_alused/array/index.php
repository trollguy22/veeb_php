<?php
$ajalugu = array(
    'nimi' => 'Eesti side ja interneti 100 aastat',
    'autor' => 'Jaak Ulman',
    'zanr' => 'ajalugu',
    'aasta' => 2019,
    'hind' => 15
);
$IT = array(
    'nimi' => 'Infotehnoloogia käsiraamat koolidele ja iseõppijatele II',
    'autor' => 'Jaak Pihlau',
    'zanr' => 'IT',
    'aasta' => 1998,
    'hind' => 10
);
$liha = array(
    'nimi' => 'Lihtsad liharoad',
    'autor' => 'Marika Vingissar',
    'zanr' => 'kokandus',
    'aasta' => 2018,
    'hind' => 5.9
);

echo  '<pre>';
print_r($ajalugu);
echo '</pre>';

echo  '<pre>';
print_r($IT);
echo '</pre>';

echo  '<pre>';
print_r($liha);
echo '</pre>';
echo '<br>';
?>

<table>
    <tbody>
    <tr>
        <td></td>
        <td>raamat_1</td>
        <td>raamat_2</td>
        <td>raamat_3</td>
    </tr>
    <tr>
        <td>nimi</td>
        <td>Eesti side ja interneti 100 aastat</td>
        <td>Infotehnoloogia käsiraamat koolidele ja iseõppijatele II</td>
        <td>
            <table>
                <tbody>
                <tr>
                    <td>Lihtsad liharoad</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>autor</td>
        <td>Jaak Ulmann</td>
        <td>Jaak Pihlau</td>
        <td>Marika Vingissar</td>
    </tr>
    <tr>
        <td>zanr</td>
        <td>Ajalugu</td>
        <td>IT</td>
        <td>kokandus</td>
    </tr>
    <tr>
        <td>aasta</td>
        <td>2019</td>
        <td>1998</td>
        <td>2018</td>
    </tr>
    <tr>
        <td>hind</td>
        <td>15</td>
        <td>10</td>
        <td>5.9</td>
    </tr>
    </tbody>
</table>
<p></p>