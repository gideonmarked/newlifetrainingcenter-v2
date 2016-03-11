<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/plugins/grinkomeda/enrollment/components/applicationform/familybackground.htm */
class __TwigTemplate_64c40fda1bbb3f79071300f7d5fdc9e1b0ce5a1c30427ab8069dce3d24f4d208 extends Twig_Template
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
          <h3 class=\"gf_progressbar_title\">Step 3 of 7 - STEP 3: Family Background</h3>
          <div class=\"gf_progressbar\">
               <div class=\"gf_progressbar_percentage percentbar_green percentbar_0\" style=\"width:0%;\"><span>28%</span></div>
          </div>
          <div style=\"width:100%;border-bottom: 1px dashed black;padding:10px 0px;\"></div>
          <br/>
          <form>
               <div class=\"form-group row\">
                    <div class=\"col-md-6 pull-left\">
                         <label for=\"inputEmail\">Name</label>
                         <input type=\"email\" id=\"inputApplication\" class=\"form-control\" placeholder=\"First Name\" required=\"\">
                         <span>First</span>
                    </div>
                    <div class=\"col-md-6 pull-left\">
                         <label for=\"inputEmail\"></label>
                         <input type=\"email\" id=\"inputApplication\" class=\"form-control\" placeholder=\"First Name\" required=\"\">
                         <span>Last</span>
                    </div>
               </div>
               <div class=\"form-group row\">
                    <div class=\"col-md-12 pull-left\">
                         <label for=\"inputEmail\">Spouse's Occupation</label>
                         <input type=\"email\" id=\"inputApplication\" class=\"form-control\" placeholder=\"First Name\" required=\"\">
                    </div>
               </div>
               <div class=\"form-group row\">
                    <div class=\"col-md-4 pull-left\">
                        <label for=\"inputEmail\">Is your spouse (if married), or your parents / guardians (if not married), in agreement with you to enroll in NTC this school year?</label>
                        <input type=\"radio\" name=\"travelling\" value=\"yes\"> Yes<br>
                        <input type=\"radio\" name=\"travelling\" value=\"no\"> No
                    </div>
               </div>
               <h3>Children</h3>
               <div style=\"width:100%;border-bottom: 1px dashed black;padding:10px 0px;\"></div>
               <div class=\"form-group row\" id=\"children\">
                    <li class=\"list-group-item\">
                         <div class=\"col-md-5 pull-left\">
                              <label for=\"inputEmail\">Name</label>
                              <input type=\"email\" id=\"inputApplication\" class=\"form-control\" placeholder=\"First Name\" required=\"\">
                         </div>
                         <div class=\"col-md-3 pull-left\">
                              <label for=\"inputEmail\">Age</label>
                              <input type=\"email\" id=\"inputApplication\" class=\"form-control\" placeholder=\"First Name\" required=\"\">
                         </div>
                         <div class=\"col-md-2 pull-left\">
                              <label for=\"inputEmail\">Gender</label>
                              <select name=\"input_20\" id=\"input_1_20\" class=\"medium form-control\"><option value=\"Male\" selected=\"selected\">Male</option><option value=\"Female\">Female</option></select>
                         </div>
                         <div class=\"col-md-2 pull-left\">
                              <br/>
                              <button data-request=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSavePersonalInformation\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalinformation': '.form_wrapper'\" data-request-success=\"\$('.input-item').val('')\" class=\"btn btn-primary\">+</button>
                              <button data-request=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSavePersonalInformation\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalinformation': '.form_wrapper'\" data-request-success=\"\$('.input-item').val('')\" class=\"btn btn-primary\">-</button>
                         </div>
                    </li>
               </div>
               <div style=\"width:100%;border-bottom: 1px dashed black;padding:10px 0px;\"></div>
               <br/>
               <div class=\"form-group row\">
                    <div class=\"col-md-6 pull-left\">
                    <button data-request=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSavePersonalInformation\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalinformation': '.form_wrapper'\" data-request-success=\"\$('.input-item').val('')\" class=\"btn btn-primary\">Back: Personal Information</button>
                    <button data-request=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSaveFamilyBackground\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::educationalbackground': '.form_wrapper'\" data-request-success=\"\$('.input-item').val('')\" class=\"btn btn-primary\">Next: Educational Background</button>
                    </div>
               </div>
          </form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/plugins/grinkomeda/enrollment/components/applicationform/familybackground.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 62,  91 => 61,  78 => 53,  72 => 52,  19 => 1,);
    }
}
/* <div class="form_wrapper">*/
/*           <h3 class="gf_progressbar_title">Step 3 of 7 - STEP 3: Family Background</h3>*/
/*           <div class="gf_progressbar">*/
/*                <div class="gf_progressbar_percentage percentbar_green percentbar_0" style="width:0%;"><span>28%</span></div>*/
/*           </div>*/
/*           <div style="width:100%;border-bottom: 1px dashed black;padding:10px 0px;"></div>*/
/*           <br/>*/
/*           <form>*/
/*                <div class="form-group row">*/
/*                     <div class="col-md-6 pull-left">*/
/*                          <label for="inputEmail">Name</label>*/
/*                          <input type="email" id="inputApplication" class="form-control" placeholder="First Name" required="">*/
/*                          <span>First</span>*/
/*                     </div>*/
/*                     <div class="col-md-6 pull-left">*/
/*                          <label for="inputEmail"></label>*/
/*                          <input type="email" id="inputApplication" class="form-control" placeholder="First Name" required="">*/
/*                          <span>Last</span>*/
/*                     </div>*/
/*                </div>*/
/*                <div class="form-group row">*/
/*                     <div class="col-md-12 pull-left">*/
/*                          <label for="inputEmail">Spouse's Occupation</label>*/
/*                          <input type="email" id="inputApplication" class="form-control" placeholder="First Name" required="">*/
/*                     </div>*/
/*                </div>*/
/*                <div class="form-group row">*/
/*                     <div class="col-md-4 pull-left">*/
/*                         <label for="inputEmail">Is your spouse (if married), or your parents / guardians (if not married), in agreement with you to enroll in NTC this school year?</label>*/
/*                         <input type="radio" name="travelling" value="yes"> Yes<br>*/
/*                         <input type="radio" name="travelling" value="no"> No*/
/*                     </div>*/
/*                </div>*/
/*                <h3>Children</h3>*/
/*                <div style="width:100%;border-bottom: 1px dashed black;padding:10px 0px;"></div>*/
/*                <div class="form-group row" id="children">*/
/*                     <li class="list-group-item">*/
/*                          <div class="col-md-5 pull-left">*/
/*                               <label for="inputEmail">Name</label>*/
/*                               <input type="email" id="inputApplication" class="form-control" placeholder="First Name" required="">*/
/*                          </div>*/
/*                          <div class="col-md-3 pull-left">*/
/*                               <label for="inputEmail">Age</label>*/
/*                               <input type="email" id="inputApplication" class="form-control" placeholder="First Name" required="">*/
/*                          </div>*/
/*                          <div class="col-md-2 pull-left">*/
/*                               <label for="inputEmail">Gender</label>*/
/*                               <select name="input_20" id="input_1_20" class="medium form-control"><option value="Male" selected="selected">Male</option><option value="Female">Female</option></select>*/
/*                          </div>*/
/*                          <div class="col-md-2 pull-left">*/
/*                               <br/>*/
/*                               <button data-request="{{ __SELF__ }}::onSavePersonalInformation" data-request-update="'{{ __SELF__ }}::personalinformation': '.form_wrapper'" data-request-success="$('.input-item').val('')" class="btn btn-primary">+</button>*/
/*                               <button data-request="{{ __SELF__ }}::onSavePersonalInformation" data-request-update="'{{ __SELF__ }}::personalinformation': '.form_wrapper'" data-request-success="$('.input-item').val('')" class="btn btn-primary">-</button>*/
/*                          </div>*/
/*                     </li>*/
/*                </div>*/
/*                <div style="width:100%;border-bottom: 1px dashed black;padding:10px 0px;"></div>*/
/*                <br/>*/
/*                <div class="form-group row">*/
/*                     <div class="col-md-6 pull-left">*/
/*                     <button data-request="{{ __SELF__ }}::onSavePersonalInformation" data-request-update="'{{ __SELF__ }}::personalinformation': '.form_wrapper'" data-request-success="$('.input-item').val('')" class="btn btn-primary">Back: Personal Information</button>*/
/*                     <button data-request="{{ __SELF__ }}::onSaveFamilyBackground" data-request-update="'{{ __SELF__ }}::educationalbackground': '.form_wrapper'" data-request-success="$('.input-item').val('')" class="btn btn-primary">Next: Educational Background</button>*/
/*                     </div>*/
/*                </div>*/
/*           </form>*/
/* </div>*/
