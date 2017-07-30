<?php

class partial_Media_Type_Image_160d518bc707b56cf671ca4ad661ecf6bf06bd96 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['section'] = NULL;
$arguments81['partial'] = NULL;
$arguments81['delegate'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['optional'] = false;
$arguments81['default'] = NULL;
$arguments81['contentAs'] = NULL;
$arguments81['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array84);
$array85 = array (
);$array83['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array85);
$array86 = array (
);$array83['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array86);
$array87 = array (
);$array83['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array87);
$arguments81['arguments'] = $array83;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
            ';
return $output80;
};
$arguments76 = array();
$arguments76['parameter'] = NULL;
$arguments76['target'] = '';
$arguments76['class'] = '';
$arguments76['title'] = '';
$arguments76['additionalParams'] = '';
$arguments76['additionalAttributes'] = array (
);
$arguments76['useCacheHash'] = false;
$array78 = array (
);$arguments76['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array78);
$array79 = array (
);$arguments76['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array79);

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
        ';
return $output75;
};
$arguments73 = array();

$output72 .= '';

$output72 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array129);
$array130 = array (
);$array128['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array130);
$array131 = array (
);$array128['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array131);
$array132 = array (
);$array128['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array132);
$arguments126['arguments'] = $array128;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
                    ';
return $output125;
};
$arguments121 = array();
$arguments121['image'] = NULL;
$arguments121['configuration'] = NULL;
$array123 = array (
);$arguments121['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array123);
$array124 = array (
);$arguments121['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array124);

$output120 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                ';
return $output120;
};
$arguments118 = array();

$output117 .= '';

$output117 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array139);
$array140 = array (
);$array138['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array140);
$array141 = array (
);$array138['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array141);
$array142 = array (
);$array138['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array142);
$arguments136['arguments'] = $array138;

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
                ';
return $output135;
};
$arguments133 = array();
$arguments133['if'] = NULL;

$output117 .= '';

$output117 .= '
            ';
return $output117;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array115);

$expression116 = function($context) {return ($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['section'] = NULL;
$arguments99['partial'] = NULL;
$arguments99['delegate'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['optional'] = false;
$arguments99['default'] = NULL;
$arguments99['contentAs'] = NULL;
$arguments99['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array102);
$array103 = array (
);$array101['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array103);
$array104 = array (
);$array101['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array104);
$array105 = array (
);$array101['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array105);
$arguments99['arguments'] = $array101;

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
                    ';
return $output98;
};
$arguments94 = array();
$arguments94['image'] = NULL;
$arguments94['configuration'] = NULL;
$array96 = array (
);$arguments94['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array96);
$array97 = array (
);$arguments94['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array97);

$output93 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
                ';
return $output93;
};
$arguments91['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array110);
$array111 = array (
);$array109['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array111);
$array112 = array (
);$array109['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array112);
$array113 = array (
);$array109['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array113);
$arguments107['arguments'] = $array109;

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                ';
return $output106;
};

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
        ';
return $output90;
};
$arguments88 = array();
$arguments88['if'] = NULL;

$output72 .= '';

$output72 .= '
    ';
return $output72;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array70);

$expression71 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array12);
$array13 = array (
);$array11['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array13);
$array14 = array (
);$array11['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array14);
$array15 = array (
);$array11['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array15);
$arguments9['arguments'] = $array11;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments4 = array();
$arguments4['parameter'] = NULL;
$arguments4['target'] = '';
$arguments4['class'] = '';
$arguments4['title'] = '';
$arguments4['additionalParams'] = '';
$arguments4['additionalAttributes'] = array (
);
$arguments4['useCacheHash'] = false;
$array6 = array (
);$arguments4['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array6);
$array7 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array7);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array55);
$array56 = array (
);$array54['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array56);
$array57 = array (
);$array54['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array57);
$array58 = array (
);$array54['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array58);
$arguments52['arguments'] = $array54;

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                    ';
return $output51;
};
$arguments47 = array();
$arguments47['image'] = NULL;
$arguments47['configuration'] = NULL;
$array49 = array (
);$arguments47['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array49);
$array50 = array (
);$arguments47['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array50);

$output46 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                ';
return $output46;
};
$arguments44 = array();

$output43 .= '';

$output43 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['section'] = NULL;
$arguments62['partial'] = NULL;
$arguments62['delegate'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['optional'] = false;
$arguments62['default'] = NULL;
$arguments62['contentAs'] = NULL;
$arguments62['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array65);
$array66 = array (
);$array64['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array66);
$array67 = array (
);$array64['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array67);
$array68 = array (
);$array64['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array68);
$arguments62['arguments'] = $array64;

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                ';
return $output61;
};
$arguments59 = array();
$arguments59['if'] = NULL;

$output43 .= '';

$output43 .= '
            ';
return $output43;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array41);

$expression42 = function($context) {return ($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array28);
$array29 = array (
);$array27['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array29);
$array30 = array (
);$array27['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array30);
$array31 = array (
);$array27['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array31);
$arguments25['arguments'] = $array27;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                    ';
return $output24;
};
$arguments20 = array();
$arguments20['image'] = NULL;
$arguments20['configuration'] = NULL;
$array22 = array (
);$arguments20['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array22);
$array23 = array (
);$arguments20['configuration'] = $renderingContext->getVariableProvider()->getByPath('settings.media.popup', $array23);

$output19 .= TYPO3\CMS\FluidStyledContent\ViewHelpers\Link\ClickEnlargeViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array36);
$array37 = array (
);$array35['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array37);
$array38 = array (
);$array35['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array38);
$array39 = array (
);$array35['layout'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array39);
$arguments33['arguments'] = $array35;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                ';
return $output32;
};

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
        ';
return $output16;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
        <figcaption class="image-caption">
            ';
$array149 = array (
);
$output148 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.description', $array149), ENT_QUOTES);

$output148 .= '
        </figcaption>
    ';
return $output148;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('file.description', $array146);

$expression147 = function($context) {return ($context["node0"]);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = $renderChildrenClosure144;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#