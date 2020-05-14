

<template>
  <div id="orderForm">
    <div id="contact-status"></div>
    <form id="requestForm">
      <label id="lsubject" class="mylabel">عنوان درخواست :</label>
      <select
        name="subject"
        id="subjselBox"
        class="myinputB"
        v-model="$v.subjV.$model"
        @blur="$v.subjV.$touch"
        v-bind:class="{error: $v.subjV.$error, dirty: $v.subjV.$dirty && !$v.subjV.$invalid}"
      >
        <option value selected disabled hidden>انتخاب کنید...</option>
        <option value="1">مشکلات سخت افزاری | تعمیرات</option>
        <option value="2">مشکلات نرم افزاری | اپل آی دی-برنامه-آپدیت و...</option>
        <option value="3">مشاوره خرید</option>
        <option value="4">سایر</option>
      </select>
      <span class="theFail" v-if="(!$v.subjV.required)">
        <p class="failText">عنوان درخواست را انتخاب کنید</p>
      </span>
      <label id="lfullname" class="mylabel">نام و نام خانوادگی :</label>
      <input
        id="fulln"
        name="fullname"
        class="myinput"
        type="text"
        v-model="$v.fullV.$model"
        :class="status($v.fullV)"
        @blur="$v.fullV.$touch"
      />
      <span class="theFail" v-if="(!$v.fullV.required)">
        <p class="failText">نام و نام خانوادگی را وارد کنید</p>
      </span>

      <div id="mobilePart">
        <label id="lmobile" class="mylabel">شماره موبایل :</label>
        <input
          name="mobile"
          id="mobTextBox"
          class="myinput"
          placeholder="مثال : 09123456789"
          v-model="$v.mobileV.$model"
          :class="status($v.mobileV)"
          @blur="$v.mobileV.$touch"
          maxlength="13"
          pattern="/^(\+98|0098|98|0)?9\d{9}$/g"
        />
        <span class="theFail" v-if="!$v.mobileV.required && contactType == 'Call'">
          <p class="failText">موبایل الزامی است</p>
        </span>
        <span class="theFail" v-if="!$v.mobileV.minLength && contactType == 'Call'">
          <p class="failText">تعداد ارقام ۱۱ رقم نیست</p>
        </span>
      </div>

<div id="modelPart">
      <label
        id="lmodel"
        for="devmodel"
        class="mylabel"
        v-if="this.subjV < 3 && this.subjV > 0"
      >مدل دستگاه :</label>
      <div id="devmodel" v-if="this.subjV < 3 && this.subjV > 0">
        <select
          v-model="$v.selectedType.$model"
          class="eng deviceList"
          name="dvt"
          @blur="$v.selectedType.$touch"
          v-bind:class="{error: $v.selectedType.$error, dirty: $v.selectedType.$dirty && !$v.selectedType.$invalid}"
        >
          <option class="eng" v-for="devType in devType" :value="devType">{{ devType.label }}</option>
        </select>

        <select
          v-model="selectedOption"
          class="eng deviceList"
          name="dvl"
          @blur="$v.selectedOption.$touch"
          v-bind:class="{error: $v.selectedOption.$error, dirty: $v.selectedOption.$dirty && !$v.selectedOption.$invalid}"
        >
          <option class="eng" v-for="option in selectedType.options">{{ option }}</option>
        </select>
              <span id="failM" class="theFail" v-if="!$v.selectedOption.required">
        <p class="failText">مدل دستگاه الزامی است</p>
      </span>
      </div>

</div>
      <div id="contactType">
                <label id="lmodel" class="mylabel">نحوه پاسخگویی :</label>
        <input
          name="rb"
          @change="conChange()"
          type="radio"
          value="Call"
          id="callCheckBox"
          class="radioB"
          checked
        />
        <label for="callCheckBox">تماس تلفنی</label>
        <input
          name="rb"
          @change="conChange()"
          type="radio"
          value="Email"
          id="emailCheckBox"
          class="radioB"
        />
        <label for="emailcheckBox">ایمیل</label>
        <input
          name="rb"
          @change="conChange()"
          type="radio"
          id="ticketCheckbox"
          value="ticket"
          class="radioB"
          disabled
        />
        <label for="ticketCheckbox">تیکت (بزودی)</label>
      </div>

      <div id="emailPart" v-if="(contactType == 'Email')">
        <label id="lemail" class="mylabel">ایمیل :</label>
        <input
          name="email"
          id="emailTextBox"
          class="eng myinput"
          v-model="$v.emailValue.$model"
          :class="status($v.emailValue)"
          @blur="$v.emailValue.$touch"
          placeholder="info@aloapple.ir"
        />
        <span class="theFail" v-if="!$v.emailValue.required && contactType == 'Email'">
          <p class="failText">ایمیل را وارد کنید</p>
        </span>
        <span class="theFail" v-if="!$v.emailValue.email && contactType == 'Email'">
          <p class="failText">ایمیل وارد شده معتبر نیست</p>
        </span>
      </div>
      <div id="timePart">
        <label id="ltime" class="mylabel">
          زمان تماس
          <br />پیشنهادی :
        </label>
        <input
          name="idate"
          placeholder="..."
          id="pdate"
          type="text"
        />
        <!-- <date-picker
          id="idate"
          name="idate"
          v-model="datetime"
            :min="this.minTime"
            :max="this.maxTime"
          inputFormat="YYYY/MM/DD HH:mm"
          format="dddd jYYYY/jMM/jDD  HH:mm"
          inputClass="form-control myinputB"
          :jumpMinute="15"
          placeholder="..."
          color="#00acc1"
          type="datetime"
          append-to="#right"
        ></date-picker> -->

      </div>
      <div id="detPart">
        <label id="ldetails" class="mylabel">خلاصه درخواست :</label>
        <textarea
          name="details"
          id="detTextBox"
          class="myinput"
          v-model="$v.detV.$model"
          :class="status($v.detV)"
          @blur="$v.detV.$touch"
        ></textarea>
        <span class="theFail" v-if="!$v.detV.required">
          <p class="failText">سوال خود را بنویسید...</p>
        </span>
      </div>
      <br />

      <input
        id="btnSMS"
        name="sendSMS"
        type="button"
        @click="validate()"
        value="ارسال کد"
      />
      <label id="codeLabel" class="mylabel">کد تأیید :</label>
      <input
        name="req-code"
        id="requestcode"
        class="eng myinput"
        disabled
        @keyup="codeCheck()"
        placeholder="____"
      />
      <svg
        id="checkmark"
        class="checkmark dspl-n"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 52 52"
      >
        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
      </svg>
      <input
        disabled
        id="sendReq"
        class="myButton btn-submit dsbld"
        type="submit"
        value="ثبت درخواست"
      />

      <input type="hidden" name="_token" :value="csrf" />
    </form>
  </div>
</template>

<script>
import {
  required,
  email,
  minLength,
  requiredIf
} from "vuelidate/lib/validators";
import moment from "moment-jalaali";
export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      fullV: "",
      mobileV: "",
      emailValue: "",
      subjV: "",
      datetime: "",
      detV: "",
      regCode: "",
      contactType: "Call",
      devType: [
        {
          label: "iPhone",
          options: [
            "SE 2",
            "11 Pro Max",
            "11 Pro",
            "11",
            "Xs Max",
            "Xs",
            "Xʀ",
            "X",
            "8+",
            "8",
            "7+",
            "7",
            "SE",
            "6S+",
            "6S",
            "6+",
            "6",
            "5S",
            "5C",
            "5"
          ]
        },
        {
          label: "iPad",
          options: ["iPad Mini", "iPad 5/6/7", "iPad Air", "iPad Pro", "Other"]
        },
        {
          label: "MacBook",
          options: [
            "MacBook",
            "MacBook Air",
            "MacBook Pro",
            "Mac Mini",
            "iMac",
            "Other"
          ]
        },
        {
          label: "AirPods",
          options: [
            "AirPods 1",
            "AirPods 2",
            "AirPods 2 Wireless Case",
            "AirPods Pro",
            "Other"
          ]
        },
        {
          label: "Apple Watch",
          options: [
            "1 Series",
            "2 Series",
            "3 Series",
            "4 Series",
            "5 Series",
            "Other"
          ]
        },
        {
          label: "Apple Watch",
          options: [
            "1 Series",
            "2 Series",
            "3 Series",
            "4 Series",
            "5 Series",
            "Other"
          ]
        }
      ],
      selectedType: -1,
      selectedOption: "",
      sentcode: "",
      succBubble: "",
      minTime:moment().add(1,'days').format('YYYY/MM/DD HH:mm'),
      maxTime:moment().add(10,'days').format('YYYY/MM/DD HH:mm'),
    };
  },
  validations: {
    mobileV: {
      required,
      minLength: minLength(11)
    },
    fullV: {
      required
    },
    emailValue: {
      required,
      email
    },
    subjV: {
      required
    },
    detV: {
      required
    },
    selectedType: {
      required
    },
    selectedOption: {
      required
    }
  },
  methods: {
    sendMail() {
      jQuery.ajax({
        url: "/sms/mail.php",
        data:
          "reqCode=" +
          this.regCode +
          "fullName=" +
          this.fullV +
          "&email=" +
          this.emailValue +
          "&subject=" +
          this.subjV +
          "&content=" +
          this.detV,
        type: "POST",
        success: function(data) {
          $("#contact-status").html(data);
        },
        error: function() {}
      });
    },
    sendsms() {
      this.mobileV = persianJs($("#mobTextBox").val())
        .toEnglishNumber()
        .toString();
      this.sentcode = Math.floor(Math.random() * 8995) + 1001;
      // alert(this.sentcode);

      var ajax = new XMLHttpRequest();
      $.ajax({
        type: "GET",

        url:
          "/sms/VerificationCode.php" +
          "?code=" +
          this.sentcode +
          "&mobile=" +
          this.mobileV,

        success: function(data) {
          alert("کد تایید به شماره همراه شما ارسال شد");
          $("#contact-status").html(data);
          $("#requestcode").prop("disabled", false);
          $("#requestcode").removeClass("dsbld");
          disableall();
        },
        error: function(data) {
          $("#contact-status").html(data);
          alert("شماره همراه وارد شده نادرست می باشد!");
          console.log(data.responseJSON);
        }
      });
    },
    codeCheck() {
      var ccode = Math.floor($("#requestcode").val());
      if (ccode == this.sentcode) {
        $("#checkmark").toggleClass("dspl-n");
        disableall();
        $("#requestcode").prop("disabled", true);
        $("#requestcode").removeClass("dsbld");
        $("#sendReq").prop("disabled", false);
        $("#sendReq").removeClass("dsbld");
        $("#sendReq").addClass("pop");
      }
    },
    status(validation) {
      return {
        error: validation.$error,
        dirty: validation.$dirty
      };
    },
    validate() {
      if (this.$v.$invalid) {
        this.$v.$touch(); //it will validate all fields
      } else {

        $("#loadingPanel")
          .addClass("op1")
          .fadeIn(200);
        $.when(this.sendsms()).done(function() {
          $("#loadingPanel")
            .addClass("op1")
            .delay(2000)
            .fadeOut(1000);
        });
      }
    },
    conChange() {
      this.contactType = document.querySelector(
        'input[name="rb"]:checked'
      ).value;
              if (this.contactType == "Email") {
        this.emailValue="";
      }
      else
      this.emailValue="no@email.com";

    },
    sendy(event) {
      event.preventDefault();
      var fullname = $("input[name=fullname]").val();
      var contactType = document.querySelector('input[name="rb"]:checked')
        .value;
      var email;
      var mobile;
      if (contactType == "Email") {
        email = $("input[name=email]").val();
      } else {
        email = "@";
      }
        mobile = persianJs($("input[name=mobile]").val())
          .toEnglishNumber()
          .toString();
      var modelt = document.getElementsByName("dvt")[0];
      var modell = document.getElementsByName("dvl")[0];
      var model;
      try {
        if (!modelt || modelt=="") model = "NoModel";
        else
          model =
            modelt.options[modelt.selectedIndex].innerText +
            " - " +
            modell.options[modell.selectedIndex].innerText;
      } catch (error) {
        document.getElementById("failM").style.display = "block";
      }
    },
  }
};
</script>
