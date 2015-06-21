<?php

/* AcmeDemoBundle:Form:bootstrap_3_layout.html.twig */
class __TwigTemplate_115de728992235da00b69e058afbce9d0427c583d8593507f0865de0271c3d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "AcmeDemoBundle:Form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e158119ec59776e3bc623b8001eda60d83aee15fcb2822bb2e1d18fcd8f0a7e6 = $this->env->getExtension("native_profiler");
        $__internal_e158119ec59776e3bc623b8001eda60d83aee15fcb2822bb2e1d18fcd8f0a7e6->enter($__internal_e158119ec59776e3bc623b8001eda60d83aee15fcb2822bb2e1d18fcd8f0a7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Form:bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('radio_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('form_row', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('button_row', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('choice_row', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('date_row', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('time_row', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('radio_row', $context, $blocks);
        // line 226
        echo "
";
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_e158119ec59776e3bc623b8001eda60d83aee15fcb2822bb2e1d18fcd8f0a7e6->leave($__internal_e158119ec59776e3bc623b8001eda60d83aee15fcb2822bb2e1d18fcd8f0a7e6_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0d1f0be4633ab553e448766633f345c0977262180ef18c08c19969fcdb6e8367 = $this->env->getExtension("native_profiler");
        $__internal_0d1f0be4633ab553e448766633f345c0977262180ef18c08c19969fcdb6e8367->enter($__internal_0d1f0be4633ab553e448766633f345c0977262180ef18c08c19969fcdb6e8367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0d1f0be4633ab553e448766633f345c0977262180ef18c08c19969fcdb6e8367->leave($__internal_0d1f0be4633ab553e448766633f345c0977262180ef18c08c19969fcdb6e8367_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_38efe59881f2cf4f6be9ac4e30f9d6ea15a4d5e24a158fd92823ed07810b5c18 = $this->env->getExtension("native_profiler");
        $__internal_38efe59881f2cf4f6be9ac4e30f9d6ea15a4d5e24a158fd92823ed07810b5c18->enter($__internal_38efe59881f2cf4f6be9ac4e30f9d6ea15a4d5e24a158fd92823ed07810b5c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_38efe59881f2cf4f6be9ac4e30f9d6ea15a4d5e24a158fd92823ed07810b5c18->leave($__internal_38efe59881f2cf4f6be9ac4e30f9d6ea15a4d5e24a158fd92823ed07810b5c18_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_30948b273c3a8f452ba8f1acadeebbc7937be931d75612ad1349c84c975e14a9 = $this->env->getExtension("native_profiler");
        $__internal_30948b273c3a8f452ba8f1acadeebbc7937be931d75612ad1349c84c975e14a9->enter($__internal_30948b273c3a8f452ba8f1acadeebbc7937be931d75612ad1349c84c975e14a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_30948b273c3a8f452ba8f1acadeebbc7937be931d75612ad1349c84c975e14a9->leave($__internal_30948b273c3a8f452ba8f1acadeebbc7937be931d75612ad1349c84c975e14a9_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_59149680090e01676b2718605f6bd4b0f1cc3fa9b6b0a5dbfbe5baefe6defe99 = $this->env->getExtension("native_profiler");
        $__internal_59149680090e01676b2718605f6bd4b0f1cc3fa9b6b0a5dbfbe5baefe6defe99->enter($__internal_59149680090e01676b2718605f6bd4b0f1cc3fa9b6b0a5dbfbe5baefe6defe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 25
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_59149680090e01676b2718605f6bd4b0f1cc3fa9b6b0a5dbfbe5baefe6defe99->leave($__internal_59149680090e01676b2718605f6bd4b0f1cc3fa9b6b0a5dbfbe5baefe6defe99_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_cf2b7ab39a868e13534b72f23c9e6e4077ad5745ed64056f6bc703fd177347bc = $this->env->getExtension("native_profiler");
        $__internal_cf2b7ab39a868e13534b72f23c9e6e4077ad5745ed64056f6bc703fd177347bc->enter($__internal_cf2b7ab39a868e13534b72f23c9e6e4077ad5745ed64056f6bc703fd177347bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cf2b7ab39a868e13534b72f23c9e6e4077ad5745ed64056f6bc703fd177347bc->leave($__internal_cf2b7ab39a868e13534b72f23c9e6e4077ad5745ed64056f6bc703fd177347bc_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7eb74d3d3cbc68d793b37f61612c2b2cc82705f9f36d2c5f4dbb3974080c3895 = $this->env->getExtension("native_profiler");
        $__internal_7eb74d3d3cbc68d793b37f61612c2b2cc82705f9f36d2c5f4dbb3974080c3895->enter($__internal_7eb74d3d3cbc68d793b37f61612c2b2cc82705f9f36d2c5f4dbb3974080c3895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_7eb74d3d3cbc68d793b37f61612c2b2cc82705f9f36d2c5f4dbb3974080c3895->leave($__internal_7eb74d3d3cbc68d793b37f61612c2b2cc82705f9f36d2c5f4dbb3974080c3895_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_da24c346fa45795066efd30f53eec900ec2a5c54e7062c4ddf99d6543a9d34c8 = $this->env->getExtension("native_profiler");
        $__internal_da24c346fa45795066efd30f53eec900ec2a5c54e7062c4ddf99d6543a9d34c8->enter($__internal_da24c346fa45795066efd30f53eec900ec2a5c54e7062c4ddf99d6543a9d34c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_da24c346fa45795066efd30f53eec900ec2a5c54e7062c4ddf99d6543a9d34c8->leave($__internal_da24c346fa45795066efd30f53eec900ec2a5c54e7062c4ddf99d6543a9d34c8_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5af39ac7c0eb931c24a02770bc3ddbc443e39b660bf2b220bad9a97e644f13ab = $this->env->getExtension("native_profiler");
        $__internal_5af39ac7c0eb931c24a02770bc3ddbc443e39b660bf2b220bad9a97e644f13ab->enter($__internal_5af39ac7c0eb931c24a02770bc3ddbc443e39b660bf2b220bad9a97e644f13ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_5af39ac7c0eb931c24a02770bc3ddbc443e39b660bf2b220bad9a97e644f13ab->leave($__internal_5af39ac7c0eb931c24a02770bc3ddbc443e39b660bf2b220bad9a97e644f13ab_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fdaa23d02e8a8cee12a132b544b022cd2e9345c2d3433de972b7fe211b3c1bf3 = $this->env->getExtension("native_profiler");
        $__internal_fdaa23d02e8a8cee12a132b544b022cd2e9345c2d3433de972b7fe211b3c1bf3->enter($__internal_fdaa23d02e8a8cee12a132b544b022cd2e9345c2d3433de972b7fe211b3c1bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_fdaa23d02e8a8cee12a132b544b022cd2e9345c2d3433de972b7fe211b3c1bf3->leave($__internal_fdaa23d02e8a8cee12a132b544b022cd2e9345c2d3433de972b7fe211b3c1bf3_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3f3c11f3266c8dcb83600b211a4f2958f8925359bb142c64a482f720def745ef = $this->env->getExtension("native_profiler");
        $__internal_3f3c11f3266c8dcb83600b211a4f2958f8925359bb142c64a482f720def745ef->enter($__internal_3f3c11f3266c8dcb83600b211a4f2958f8925359bb142c64a482f720def745ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "</div>";
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 108
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_3f3c11f3266c8dcb83600b211a4f2958f8925359bb142c64a482f720def745ef->leave($__internal_3f3c11f3266c8dcb83600b211a4f2958f8925359bb142c64a482f720def745ef_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_01368820d026f8852669689284cc145c8371edd02f8ad7a09f05e89530a621c3 = $this->env->getExtension("native_profiler");
        $__internal_01368820d026f8852669689284cc145c8371edd02f8ad7a09f05e89530a621c3->enter($__internal_01368820d026f8852669689284cc145c8371edd02f8ad7a09f05e89530a621c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 117
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
        
        $__internal_01368820d026f8852669689284cc145c8371edd02f8ad7a09f05e89530a621c3->leave($__internal_01368820d026f8852669689284cc145c8371edd02f8ad7a09f05e89530a621c3_prof);

    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_774b0d3f3b307726d3fb1521629955b82bb9669130cccab104af4e7e81ae3daa = $this->env->getExtension("native_profiler");
        $__internal_774b0d3f3b307726d3fb1521629955b82bb9669130cccab104af4e7e81ae3daa->enter($__internal_774b0d3f3b307726d3fb1521629955b82bb9669130cccab104af4e7e81ae3daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 127
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 128
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
        
        $__internal_774b0d3f3b307726d3fb1521629955b82bb9669130cccab104af4e7e81ae3daa->leave($__internal_774b0d3f3b307726d3fb1521629955b82bb9669130cccab104af4e7e81ae3daa_prof);

    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3f714d8144ec84fc05b3e7ed01c9221c127d9e03fcd439a73abb65d44c6e1224 = $this->env->getExtension("native_profiler");
        $__internal_3f714d8144ec84fc05b3e7ed01c9221c127d9e03fcd439a73abb65d44c6e1224->enter($__internal_3f714d8144ec84fc05b3e7ed01c9221c127d9e03fcd439a73abb65d44c6e1224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 140
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3f714d8144ec84fc05b3e7ed01c9221c127d9e03fcd439a73abb65d44c6e1224->leave($__internal_3f714d8144ec84fc05b3e7ed01c9221c127d9e03fcd439a73abb65d44c6e1224_prof);

    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1a779084f6db31ed6ab97e55f6b37da5fa9f468dfaa48eb8e7863ac2614d7862 = $this->env->getExtension("native_profiler");
        $__internal_1a779084f6db31ed6ab97e55f6b37da5fa9f468dfaa48eb8e7863ac2614d7862->enter($__internal_1a779084f6db31ed6ab97e55f6b37da5fa9f468dfaa48eb8e7863ac2614d7862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 146
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(strtr((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1a779084f6db31ed6ab97e55f6b37da5fa9f468dfaa48eb8e7863ac2614d7862->leave($__internal_1a779084f6db31ed6ab97e55f6b37da5fa9f468dfaa48eb8e7863ac2614d7862_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a1304df692af38d35fa16292eea2a98778baba8431a15e90aa4009fd58803e24 = $this->env->getExtension("native_profiler");
        $__internal_a1304df692af38d35fa16292eea2a98778baba8431a15e90aa4009fd58803e24->enter($__internal_a1304df692af38d35fa16292eea2a98778baba8431a15e90aa4009fd58803e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a1304df692af38d35fa16292eea2a98778baba8431a15e90aa4009fd58803e24->leave($__internal_a1304df692af38d35fa16292eea2a98778baba8431a15e90aa4009fd58803e24_prof);

    }

    // line 154
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e63cde7c7471530bce98de8167dbbe02777dcb91e2378a247a07915a00ad042a = $this->env->getExtension("native_profiler");
        $__internal_e63cde7c7471530bce98de8167dbbe02777dcb91e2378a247a07915a00ad042a->enter($__internal_e63cde7c7471530bce98de8167dbbe02777dcb91e2378a247a07915a00ad042a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e63cde7c7471530bce98de8167dbbe02777dcb91e2378a247a07915a00ad042a->leave($__internal_e63cde7c7471530bce98de8167dbbe02777dcb91e2378a247a07915a00ad042a_prof);

    }

    // line 158
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ab39ad03e6d2ac27f69e4cecfcdde0452e4a09209b4a2cf07eb317af06fe08e7 = $this->env->getExtension("native_profiler");
        $__internal_ab39ad03e6d2ac27f69e4cecfcdde0452e4a09209b4a2cf07eb317af06fe08e7->enter($__internal_ab39ad03e6d2ac27f69e4cecfcdde0452e4a09209b4a2cf07eb317af06fe08e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 159
        echo "    ";
        // line 160
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 161
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 165
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 168
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 169
                echo "        ";
            }
            // line 170
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 171
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 172
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            // line 173
            echo "</label>
    ";
        }
        
        $__internal_ab39ad03e6d2ac27f69e4cecfcdde0452e4a09209b4a2cf07eb317af06fe08e7->leave($__internal_ab39ad03e6d2ac27f69e4cecfcdde0452e4a09209b4a2cf07eb317af06fe08e7_prof);

    }

    // line 179
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e6055e57fa8e8ced0bc8fa887bb2e84a1d7765983be1d3a19e077f65623607ba = $this->env->getExtension("native_profiler");
        $__internal_e6055e57fa8e8ced0bc8fa887bb2e84a1d7765983be1d3a19e077f65623607ba->enter($__internal_e6055e57fa8e8ced0bc8fa887bb2e84a1d7765983be1d3a19e077f65623607ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 180
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 184
        echo "</div>";
        
        $__internal_e6055e57fa8e8ced0bc8fa887bb2e84a1d7765983be1d3a19e077f65623607ba->leave($__internal_e6055e57fa8e8ced0bc8fa887bb2e84a1d7765983be1d3a19e077f65623607ba_prof);

    }

    // line 187
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b9a960407668c6570d3e6d69370236ccb5bd7a4eb3e074fdeb2c54a447909088 = $this->env->getExtension("native_profiler");
        $__internal_b9a960407668c6570d3e6d69370236ccb5bd7a4eb3e074fdeb2c54a447909088->enter($__internal_b9a960407668c6570d3e6d69370236ccb5bd7a4eb3e074fdeb2c54a447909088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 188
        echo "<div class=\"form-group\">";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 190
        echo "</div>";
        
        $__internal_b9a960407668c6570d3e6d69370236ccb5bd7a4eb3e074fdeb2c54a447909088->leave($__internal_b9a960407668c6570d3e6d69370236ccb5bd7a4eb3e074fdeb2c54a447909088_prof);

    }

    // line 193
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_435d88c3ae5b915724d521b3dab085e926549a8dc73c73be676e26466e15a56d = $this->env->getExtension("native_profiler");
        $__internal_435d88c3ae5b915724d521b3dab085e926549a8dc73c73be676e26466e15a56d->enter($__internal_435d88c3ae5b915724d521b3dab085e926549a8dc73c73be676e26466e15a56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 194
        $context["force_error"] = true;
        // line 195
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_435d88c3ae5b915724d521b3dab085e926549a8dc73c73be676e26466e15a56d->leave($__internal_435d88c3ae5b915724d521b3dab085e926549a8dc73c73be676e26466e15a56d_prof);

    }

    // line 198
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0f26bc42031454ef44542c4aa31f00fbbd2655a56bb419e3bb9a3c71808e0efb = $this->env->getExtension("native_profiler");
        $__internal_0f26bc42031454ef44542c4aa31f00fbbd2655a56bb419e3bb9a3c71808e0efb->enter($__internal_0f26bc42031454ef44542c4aa31f00fbbd2655a56bb419e3bb9a3c71808e0efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 199
        $context["force_error"] = true;
        // line 200
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0f26bc42031454ef44542c4aa31f00fbbd2655a56bb419e3bb9a3c71808e0efb->leave($__internal_0f26bc42031454ef44542c4aa31f00fbbd2655a56bb419e3bb9a3c71808e0efb_prof);

    }

    // line 203
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_64e12238b6c7166f89f27e58d5804a419288454dbc07f28552a4d08df4830eee = $this->env->getExtension("native_profiler");
        $__internal_64e12238b6c7166f89f27e58d5804a419288454dbc07f28552a4d08df4830eee->enter($__internal_64e12238b6c7166f89f27e58d5804a419288454dbc07f28552a4d08df4830eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 204
        $context["force_error"] = true;
        // line 205
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_64e12238b6c7166f89f27e58d5804a419288454dbc07f28552a4d08df4830eee->leave($__internal_64e12238b6c7166f89f27e58d5804a419288454dbc07f28552a4d08df4830eee_prof);

    }

    // line 208
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_583398b82ebfd6864e2ffcfb6f4e33a36e471d1ec92bab5cfc86091bfaca8f57 = $this->env->getExtension("native_profiler");
        $__internal_583398b82ebfd6864e2ffcfb6f4e33a36e471d1ec92bab5cfc86091bfaca8f57->enter($__internal_583398b82ebfd6864e2ffcfb6f4e33a36e471d1ec92bab5cfc86091bfaca8f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_583398b82ebfd6864e2ffcfb6f4e33a36e471d1ec92bab5cfc86091bfaca8f57->leave($__internal_583398b82ebfd6864e2ffcfb6f4e33a36e471d1ec92bab5cfc86091bfaca8f57_prof);

    }

    // line 213
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8c67e4b8117d4f3a00fd90574f4ce154fc8d2384dd6c712af0ad5d75e5c0e193 = $this->env->getExtension("native_profiler");
        $__internal_8c67e4b8117d4f3a00fd90574f4ce154fc8d2384dd6c712af0ad5d75e5c0e193->enter($__internal_8c67e4b8117d4f3a00fd90574f4ce154fc8d2384dd6c712af0ad5d75e5c0e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 214
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 217
        echo "</div>";
        
        $__internal_8c67e4b8117d4f3a00fd90574f4ce154fc8d2384dd6c712af0ad5d75e5c0e193->leave($__internal_8c67e4b8117d4f3a00fd90574f4ce154fc8d2384dd6c712af0ad5d75e5c0e193_prof);

    }

    // line 220
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a75115b50704c6f63be7a96393148d8da2f7e22691a8a6d071747b2778dba465 = $this->env->getExtension("native_profiler");
        $__internal_a75115b50704c6f63be7a96393148d8da2f7e22691a8a6d071747b2778dba465->enter($__internal_a75115b50704c6f63be7a96393148d8da2f7e22691a8a6d071747b2778dba465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 221
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 224
        echo "</div>";
        
        $__internal_a75115b50704c6f63be7a96393148d8da2f7e22691a8a6d071747b2778dba465->leave($__internal_a75115b50704c6f63be7a96393148d8da2f7e22691a8a6d071747b2778dba465_prof);

    }

    // line 229
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_07a0c2e6db4b5ae7992da10b49bf4647d776c0f28729832e20288d0020514299 = $this->env->getExtension("native_profiler");
        $__internal_07a0c2e6db4b5ae7992da10b49bf4647d776c0f28729832e20288d0020514299->enter($__internal_07a0c2e6db4b5ae7992da10b49bf4647d776c0f28729832e20288d0020514299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 230
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 231
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 232
            echo "    <ul class=\"list-unstyled\">";
            // line 233
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 234
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "</ul>
    ";
            // line 237
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_07a0c2e6db4b5ae7992da10b49bf4647d776c0f28729832e20288d0020514299->leave($__internal_07a0c2e6db4b5ae7992da10b49bf4647d776c0f28729832e20288d0020514299_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  832 => 237,  829 => 236,  821 => 234,  817 => 233,  815 => 232,  809 => 231,  807 => 230,  801 => 229,  794 => 224,  792 => 223,  790 => 222,  784 => 221,  778 => 220,  771 => 217,  769 => 216,  767 => 215,  761 => 214,  755 => 213,  748 => 210,  746 => 209,  740 => 208,  733 => 205,  731 => 204,  725 => 203,  718 => 200,  716 => 199,  710 => 198,  703 => 195,  701 => 194,  695 => 193,  688 => 190,  686 => 189,  684 => 188,  678 => 187,  671 => 184,  669 => 183,  667 => 182,  665 => 181,  659 => 180,  653 => 179,  644 => 173,  642 => 172,  640 => 171,  625 => 170,  622 => 169,  619 => 168,  616 => 167,  613 => 166,  610 => 165,  607 => 164,  604 => 163,  601 => 162,  598 => 161,  595 => 160,  593 => 159,  587 => 158,  580 => 155,  574 => 154,  567 => 151,  561 => 150,  554 => 147,  552 => 146,  546 => 144,  539 => 141,  537 => 140,  531 => 139,  523 => 133,  521 => 132,  519 => 131,  516 => 129,  514 => 128,  512 => 127,  506 => 126,  498 => 122,  496 => 121,  494 => 120,  491 => 118,  489 => 117,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  462 => 106,  458 => 105,  455 => 103,  449 => 100,  448 => 99,  444 => 98,  442 => 97,  440 => 96,  434 => 95,  427 => 92,  425 => 91,  419 => 90,  410 => 85,  407 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 229,  197 => 228,  194 => 226,  192 => 220,  189 => 219,  187 => 213,  184 => 212,  182 => 208,  179 => 207,  177 => 203,  174 => 202,  172 => 198,  169 => 197,  167 => 193,  164 => 192,  162 => 187,  159 => 186,  157 => 179,  154 => 178,  151 => 176,  149 => 158,  146 => 157,  144 => 154,  141 => 153,  139 => 150,  136 => 149,  134 => 144,  131 => 143,  129 => 139,  126 => 138,  123 => 136,  121 => 126,  118 => 125,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }
}
