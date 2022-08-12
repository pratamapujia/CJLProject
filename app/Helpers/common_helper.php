<?php  

function kategori_help($kategori)
{
    if ($kategori == "machinery") {
        return "machinery";
    }
    else if ($kategori == "machinetool") {
        return "machinetool";
    }
    else if ($kategori == "cuttingtool") {
        return "cuttingtool";
    }
    else if ($kategori == "measuringtool") {
        return "measuringtool";
    }
    else if ($kategori == "handtool") {
        return "handtool";
    }
    else if ($kategori == "cuttingcoolant") {
        return "cuttingcoolant";
    }
    else {
        return "abrasive";
    }
}
?>