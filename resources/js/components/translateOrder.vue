<template>
<div id="orderForm">
                <form action="" method="post">

                <label id="lfullname" class="mylabel">نام و نام  خانوادگی</label>
                <input name="fullname" class="myinput" type="text"><br>

                <label id="lmobile" class="mylabel">تلفن همراه</label>
                <input name="mobile" id="intTextBox" class="myinput"><br>

                <label id="lemail" class="mylabel">ایمیل</label>
                <input name="email" id="mailTextBox" class="myinput"><br>
<!-- 
                <label id="lthedoc" class="mylabel">فایل مورد نظر</label>
                <input name="thedoc" class="myinput" type="file"><br> -->
<!-- 
                <label id="lpquantity" class="mylabel">تعداد صفحات</label>
                <input name="pquantity" class="myinput" type="number" value="0" min="1" max="10000"><br> -->
                <form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone"></form>
                <input id="sendBtn" class="myButton" type="submit" value="ارسال">

                <input type="hidden" name="_token" value="">

                </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Order Form mounted.')
        }
    }
</script>