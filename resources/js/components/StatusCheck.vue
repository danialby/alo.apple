<template>

                    <div id="orderForm">
                        <form id="StatCheckForm">
                          <label id="lreqCode" class="mylabel">کد درخواست :</label>
                          <input
                          id="reqCode"
                            name="reqCode"
                            class="myinput"
                            type="text"
                            v-model="$v.reqCodeV.$model"
                            :class="status($v.reqCodeV)"
                          />
                          <span class="theFail" v-if="(!$v.reqCodeV.required)">
                            <p class="failText">کد درخواست را وارد کنید</p>
                          </span>



                          <div id="mobilePart">
                            <label id="lmobile" class="mylabel">شماره موبایل :</label>
                            <input
                              name="mobile"
                              id="mobstatTextBox"
                              class="myinput"
                              placeholder="مثال : 09123456789"
                              v-model="$v.mobileV.$model"
                              :class="status($v.mobileV)"
                              maxlength="13"
                            />
                            <span class="theFail" v-if="!$v.mobileV.required">
                              <p class="failText">موبایل الزامی است</p>
                            </span>
                            <span class="theFail" v-if="!$v.mobileV.minLength">
                              <p class="failText">تعداد ارقام ۱۱ رقم نیست</p>
                            </span>
                          </div>
                          <input
                            id="reqStat"
                            class="myButton btn-submit"
                            type="submit"
                            value="ارسال"
                            @click="validate"
                          />

                          <input type="hidden" name="_token" :value="csrf" />
                        </form>
                      </div>

</template>

<script>
import {
  required,
  minLength,
  requiredIf
} from "vuelidate/lib/validators";
export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      reqCodeV: "",
      mobileV: "",
    };
  },

  validations: {
    mobileV: {
      required,
      minLength: minLength(11)
    },
    reqCodeV: {
      required
    }
  },
  methods: {
    status(validation) {
      return {
        error: validation.$error,
        dirty: validation.$dirty
      };
    },
    validate() {
      this.$v.$touch(); //it will validate all fields
      if (!this.$v.$invalid) {
              $("#loadingPanel").addClass("op1").fadeIn( 1000 );
              var reqIndex = $("#reqCode").val();
              var mob = $("#mobstatTextBox").val();
              $("#statBox").load("/StatusFetch/"+reqIndex+"/"+mob);
              $("#orderForm").addClass("hideBox");
              $("#loadingPanel").addClass("op1").delay( 3000 ).fadeOut( 1000 );
      }
    },
  }
};
</script>
