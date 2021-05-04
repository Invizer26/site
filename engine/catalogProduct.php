<?
include ('catalogElement.php');
foreach ($arrImages as $key => $value) {
    echo "<div class=\"bit\">
        <h4> Client Name </h4>
        <div class=\"photo\">
            <a href = \"product.php?id=$key\" ><img src = \"public/images/product/mini/$value[1]_mini$value[2]\"/>
        </div>
        <p> Aliquam erat volutpat . Donec a sem consequat tortor posuere dignissim sit amet at ipsum .</p></a>
    </div>";

    if (($key + 1)%3==0)
    {
        echo '<div class="line" ></div>';
    }
}
?>
