<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/plugins/grinkomeda/enrollment/components/applicationform/studyprogram.htm */
class __TwigTemplate_e6d6771d0b1fea8840f9012474037895614a522bcc3f0ec4909e269c420681b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form_wrapper\">
          <h3 class=\"gf_progressbar_title\">Step 1 of 7 - STEP 1: Choose Study Program</h3>
          <div class=\"gf_progressbar\">
               <div class=\"gf_progressbar_percentage percentbar_green percentbar_0\" style=\"width:0%;\"><span>0%</span></div>
          </div>
          <div style=\"width:100%;border-bottom: 1px dashed black;padding:10px 0px;\"></div>
          <br/>
          <form>
               <div class=\"form-group row\">
                    <div class=\"col-md-6 pull-left\">
                         <label for=\"inputEmail\">Application No.</label>
                         <input type=\"email\" id=\"inputApplication\" class=\"form-control\" placeholder=\"Application No.\" required=\"\">
                    </div>
                    
               </div>

               <div class=\"form-group row\">
                    <div class=\"col-md-6 pull-left\">
                         <label for=\"inputEmail\">Student ID</label>
                         <input type=\"email\" id=\"inputStudentID\" class=\"form-control\" placeholder=\"Student ID\" required=\"\">
                    </div>
               </div>

               <div class=\"form-group row\">
                    <div class=\"col-md-6 pull-left\">
                         <label for=\"inputEmail\">School Year</label>
                         <select name=\"input_3\" id=\"input_1_3\" class=\"form-control\" tabindex=\"3\">
                              <option value=\"SY2015-2016\">SY2015-2016</option>
                              <option value=\"SY2016-2017\">SY2016-2017</option>
                              <option value=\"SY2017-2018\">SY2017-2018</option>
                              <option value=\"SY2018-2019\">SY2018-2019</option>
                              <option value=\"SY2019-2020\">SY2019-2020</option>
                              <option value=\"SY2020-2021\">SY2020-2021</option>
                              <option value=\"SY2021-2022\">SY2021-2022</option>
                              <option value=\"SY2022-2023\">SY2022-2023</option>
                              <option value=\"SY2023-2024\">SY2023-2024</option>
                              <option value=\"SY2024-2025\">SY2024-2025</option>
                              <option value=\"SY2025-2026\">SY2025-2026</option>
                              <option value=\"SY2026-2027\">SY2026-2027</option>
                              <option value=\"SY2027-2028\">SY2027-2028</option>
                              <option value=\"SY2028-2029\">SY2028-2029</option>
                              <option value=\"SY2029-2030\">SY2029-2030</option>
                              <option value=\"SY2030-2031\">SY2030-2031</option>
                              <option value=\"SY2031-2032\">SY2031-2032</option>
                              <option value=\"SY2032-2033\">SY2032-2033</option>
                              <option value=\"SY2033-2034\">SY2033-2034</option>
                              <option value=\"SY2034-2035\">SY2034-2035</option>
                         </select>
                    </div>
               </div>
               <div style=\"width:100%;border-bottom: 1px dashed black;padding:10px 0px;\"></div>
               <br/>
               <div class=\"form-group row\">
                    <div class=\"col-md-6 pull-left\">
                         <button data-request=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddStudyProgram\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalinformation': '.form_wrapper'\" data-request-success=\"\$('.input-item').val('')\" class=\"btn btn-primary\">Next: Personal Information</button>
                    </div>
               </div>
          </form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/plugins/grinkomeda/enrollment/components/applicationform/studyprogram.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 55,  19 => 1,);
    }
}
/* <div class="form_wrapper">*/
/*           <h3 class="gf_progressbar_title">Step 1 of 7 - STEP 1: Choose Study Program</h3>*/
/*           <div class="gf_progressbar">*/
/*                <div class="gf_progressbar_percentage percentbar_green percentbar_0" style="width:0%;"><span>0%</span></div>*/
/*           </div>*/
/*           <div style="width:100%;border-bottom: 1px dashed black;padding:10px 0px;"></div>*/
/*           <br/>*/
/*           <form>*/
/*                <div class="form-group row">*/
/*                     <div class="col-md-6 pull-left">*/
/*                          <label for="inputEmail">Application No.</label>*/
/*                          <input type="email" id="inputApplication" class="form-control" placeholder="Application No." required="">*/
/*                     </div>*/
/*                     */
/*                </div>*/
/* */
/*                <div class="form-group row">*/
/*                     <div class="col-md-6 pull-left">*/
/*                          <label for="inputEmail">Student ID</label>*/
/*                          <input type="email" id="inputStudentID" class="form-control" placeholder="Student ID" required="">*/
/*                     </div>*/
/*                </div>*/
/* */
/*                <div class="form-group row">*/
/*                     <div class="col-md-6 pull-left">*/
/*                          <label for="inputEmail">School Year</label>*/
/*                          <select name="input_3" id="input_1_3" class="form-control" tabindex="3">*/
/*                               <option value="SY2015-2016">SY2015-2016</option>*/
/*                               <option value="SY2016-2017">SY2016-2017</option>*/
/*                               <option value="SY2017-2018">SY2017-2018</option>*/
/*                               <option value="SY2018-2019">SY2018-2019</option>*/
/*                               <option value="SY2019-2020">SY2019-2020</option>*/
/*                               <option value="SY2020-2021">SY2020-2021</option>*/
/*                               <option value="SY2021-2022">SY2021-2022</option>*/
/*                               <option value="SY2022-2023">SY2022-2023</option>*/
/*                               <option value="SY2023-2024">SY2023-2024</option>*/
/*                               <option value="SY2024-2025">SY2024-2025</option>*/
/*                               <option value="SY2025-2026">SY2025-2026</option>*/
/*                               <option value="SY2026-2027">SY2026-2027</option>*/
/*                               <option value="SY2027-2028">SY2027-2028</option>*/
/*                               <option value="SY2028-2029">SY2028-2029</option>*/
/*                               <option value="SY2029-2030">SY2029-2030</option>*/
/*                               <option value="SY2030-2031">SY2030-2031</option>*/
/*                               <option value="SY2031-2032">SY2031-2032</option>*/
/*                               <option value="SY2032-2033">SY2032-2033</option>*/
/*                               <option value="SY2033-2034">SY2033-2034</option>*/
/*                               <option value="SY2034-2035">SY2034-2035</option>*/
/*                          </select>*/
/*                     </div>*/
/*                </div>*/
/*                <div style="width:100%;border-bottom: 1px dashed black;padding:10px 0px;"></div>*/
/*                <br/>*/
/*                <div class="form-group row">*/
/*                     <div class="col-md-6 pull-left">*/
/*                          <button data-request="{{ __SELF__ }}::onAddStudyProgram" data-request-update="'{{ __SELF__ }}::personalinformation': '.form_wrapper'" data-request-success="$('.input-item').val('')" class="btn btn-primary">Next: Personal Information</button>*/
/*                     </div>*/
/*                </div>*/
/*           </form>*/
/* </div>*/
