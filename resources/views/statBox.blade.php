<div id="stat" class="col-sm-12">
    @if (\Session::has('error')))
    <p id="errorText">نتیجه ای یافت نشد.<br> کد رسید و شماره موبایل همخوانی ندارد.</p>
    @else

    <p id="codeLabela"  class="eng">
        <?php  echo $freq->id; ?>
    </p>
    <div id="statTop" class="row">
        <div id="statRight" class="col-sm-5">
            <ul id="statList">
            <?php
              echo"<li>";
               echo $freq->fullname;
               echo "</li>";

                $cont = $freq->contactType;
                $calld = $freq->calldate;
                $subji = $freq->subject;
                if ($cont == "Call") {
                    echo "<li>";
                    echo $freq->mobile;
                    echo "</li>";
                }
                if ($cont == "Email") {
                    echo "<li class="eng">";
                    echo $freq->email;
                    echo "</li>";
                }
                    echo "<li>";
                    if ($subji == "1") {
                        echo "مشکل سخت افزاری";
                    } elseif ($subji == "2") {
                            echo "مشکل نرم افزاری";
                        } elseif ($subji == "3") {
                            echo "مشاوره خرید";
                        } else {
                            echo "سایر";
                        }
                        echo "</li><li>";
                        if ($calld == "OYC") {
                            echo "پس از یه روز کاری";
                        } else {
                        echo $calld;
                    }
                    echo "</li>";
                     ?>

            </ul>

        </div>



        <div id="statLeft" class="col-sm-7">
        <p>
                خلاصه درخواست :
            </p>
        <p class="mustseeBox">
            <?php echo $freq->details; ?>
        </p>

        </div>
    </div>
</div>
<div id="statModel" class="col-12">
<p id="pmodel">
<?php echo $freq->model; ?>
</p>
<div class="devImg">
    <img src="css/img/mac-small-thumbsize.png"/>
</div>
</div>

        <div id="statNoteBox">
            <p id="labelNote">
                آخرین وضعیت :
            </p>
            <p id="statNote" class="mustseeBox">
            با شما تماس می گیریم.
            </p>
    </div>
@endif
