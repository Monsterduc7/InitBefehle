<?php

class layout_Default_29c361bf1aca56f8199ac9dfaccc39793024a710 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '

			<div id="c';
$array141 = array (
);
$output140 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array141), ENT_QUOTES);

$output140 .= '" class="frame frame-';
$array142 = array (
);
$output140 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.frame_class', $array142), ENT_QUOTES);

$output140 .= ' frame-type-';
$array143 = array (
);
$output140 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.CType', $array143), ENT_QUOTES);

$output140 .= ' frame-layout-';
$array144 = array (
);
$output140 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.layout', $array144), ENT_QUOTES);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array148);

$expression149 = function($context) {return ($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$output150 = '';

$output150 .= ' frame-space-before-';
$array151 = array (
);
$output150 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array151), ENT_QUOTES);
$arguments145['then'] = $output150;

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array155);

$expression156 = function($context) {return ($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$output157 = '';

$output157 .= ' frame-space-after-';
$array158 = array (
);
$output157 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array158), ENT_QUOTES);
$arguments152['then'] = $output157;

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_bsdist_visibility', $array162);

$expression163 = function($context) {return ($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$output164 = '';

$output164 .= ' ';
$array165 = array (
);
$output164 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.tx_bsdist_visibility', $array165), ENT_QUOTES);
$arguments159['then'] = $output164;

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output140 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
					<a id="c';
$array172 = array (
);
$output171 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array172), ENT_QUOTES);

$output171 .= '"></a>
				';
return $output171;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array169);

$expression170 = function($context) {return ($context["node0"]);};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['__thenClosure'] = $renderChildrenClosure167;

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output140 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['section'] = NULL;
$arguments178['partial'] = NULL;
$arguments178['delegate'] = NULL;
$arguments178['arguments'] = array (
);
$arguments178['optional'] = false;
$arguments178['default'] = NULL;
$arguments178['contentAs'] = NULL;
$arguments178['partial'] = 'DropIn/Before/All';
$arguments178['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output177 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
				';
return $output177;
};
$arguments173 = array();
$arguments173['section'] = NULL;
$arguments173['partial'] = NULL;
$arguments173['delegate'] = NULL;
$arguments173['arguments'] = array (
);
$arguments173['optional'] = false;
$arguments173['default'] = NULL;
$arguments173['contentAs'] = NULL;
$arguments173['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array175['0'] = 'true';

$expression176 = function($context) {return TRUE;};
$arguments173['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output140 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['section'] = NULL;
$arguments186['partial'] = NULL;
$arguments186['delegate'] = NULL;
$arguments186['arguments'] = array (
);
$arguments186['optional'] = false;
$arguments186['default'] = NULL;
$arguments186['contentAs'] = NULL;
$arguments186['partial'] = 'Header/All';
$arguments186['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
				';
return $output185;
};
$arguments181 = array();
$arguments181['section'] = NULL;
$arguments181['partial'] = NULL;
$arguments181['delegate'] = NULL;
$arguments181['arguments'] = array (
);
$arguments181['optional'] = false;
$arguments181['default'] = NULL;
$arguments181['contentAs'] = NULL;
$arguments181['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array183['0'] = 'true';

$expression184 = function($context) {return TRUE;};
$arguments181['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output140 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['section'] = NULL;
$arguments189['partial'] = NULL;
$arguments189['delegate'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['optional'] = false;
$arguments189['default'] = NULL;
$arguments189['contentAs'] = NULL;
$arguments189['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array191['0'] = 'true';

$expression192 = function($context) {return TRUE;};
$arguments189['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output140 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['section'] = NULL;
$arguments198['partial'] = NULL;
$arguments198['delegate'] = NULL;
$arguments198['arguments'] = array (
);
$arguments198['optional'] = false;
$arguments198['default'] = NULL;
$arguments198['contentAs'] = NULL;
$arguments198['partial'] = 'Footer/All';
$arguments198['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
				';
return $output197;
};
$arguments193 = array();
$arguments193['section'] = NULL;
$arguments193['partial'] = NULL;
$arguments193['delegate'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['optional'] = false;
$arguments193['default'] = NULL;
$arguments193['contentAs'] = NULL;
$arguments193['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array195['0'] = 'true';

$expression196 = function($context) {return TRUE;};
$arguments193['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output140 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['section'] = NULL;
$arguments206['partial'] = NULL;
$arguments206['delegate'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['optional'] = false;
$arguments206['default'] = NULL;
$arguments206['contentAs'] = NULL;
$arguments206['partial'] = 'DropIn/After/All';
$arguments206['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output205 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
				';
return $output205;
};
$arguments201 = array();
$arguments201['section'] = NULL;
$arguments201['partial'] = NULL;
$arguments201['delegate'] = NULL;
$arguments201['arguments'] = array (
);
$arguments201['optional'] = false;
$arguments201['default'] = NULL;
$arguments201['contentAs'] = NULL;
$arguments201['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array203['0'] = 'true';

$expression204 = function($context) {return TRUE;};
$arguments201['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);

$output140 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output140 .= '
			</div>

		';
return $output140;
};
$arguments138 = array();

$output137 .= '';

$output137 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '

			<a id="c';
$array212 = array (
);
$output211 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array212), ENT_QUOTES);

$output211 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
				<a id="c';
$array219 = array (
);
$output218 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array219), ENT_QUOTES);

$output218 .= '"></a>
			';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array216);

$expression217 = function($context) {return ($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
				<div class="frame-space-before-';
$array226 = array (
);
$output225 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array226), ENT_QUOTES);

$output225 .= '"></div>
			';
return $output225;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array223);

$expression224 = function($context) {return ($context["node0"]);};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = $renderChildrenClosure221;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['section'] = NULL;
$arguments232['partial'] = NULL;
$arguments232['delegate'] = NULL;
$arguments232['arguments'] = array (
);
$arguments232['optional'] = false;
$arguments232['default'] = NULL;
$arguments232['contentAs'] = NULL;
$arguments232['partial'] = 'DropIn/Before/All';
$arguments232['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
			';
return $output231;
};
$arguments227 = array();
$arguments227['section'] = NULL;
$arguments227['partial'] = NULL;
$arguments227['delegate'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['optional'] = false;
$arguments227['default'] = NULL;
$arguments227['contentAs'] = NULL;
$arguments227['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array229['0'] = 'true';

$expression230 = function($context) {return TRUE;};
$arguments227['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['section'] = NULL;
$arguments240['partial'] = NULL;
$arguments240['delegate'] = NULL;
$arguments240['arguments'] = array (
);
$arguments240['optional'] = false;
$arguments240['default'] = NULL;
$arguments240['contentAs'] = NULL;
$arguments240['partial'] = 'Header/All';
$arguments240['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
			';
return $output239;
};
$arguments235 = array();
$arguments235['section'] = NULL;
$arguments235['partial'] = NULL;
$arguments235['delegate'] = NULL;
$arguments235['arguments'] = array (
);
$arguments235['optional'] = false;
$arguments235['default'] = NULL;
$arguments235['contentAs'] = NULL;
$arguments235['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array237['0'] = 'true';

$expression238 = function($context) {return TRUE;};
$arguments235['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['section'] = NULL;
$arguments243['partial'] = NULL;
$arguments243['delegate'] = NULL;
$arguments243['arguments'] = array (
);
$arguments243['optional'] = false;
$arguments243['default'] = NULL;
$arguments243['contentAs'] = NULL;
$arguments243['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array245['0'] = 'true';

$expression246 = function($context) {return TRUE;};
$arguments243['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['section'] = NULL;
$arguments252['partial'] = NULL;
$arguments252['delegate'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['optional'] = false;
$arguments252['default'] = NULL;
$arguments252['contentAs'] = NULL;
$arguments252['partial'] = 'Footer/All';
$arguments252['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
			';
return $output251;
};
$arguments247 = array();
$arguments247['section'] = NULL;
$arguments247['partial'] = NULL;
$arguments247['delegate'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['optional'] = false;
$arguments247['default'] = NULL;
$arguments247['contentAs'] = NULL;
$arguments247['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array249['0'] = 'true';

$expression250 = function($context) {return TRUE;};
$arguments247['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['section'] = NULL;
$arguments260['partial'] = NULL;
$arguments260['delegate'] = NULL;
$arguments260['arguments'] = array (
);
$arguments260['optional'] = false;
$arguments260['default'] = NULL;
$arguments260['contentAs'] = NULL;
$arguments260['partial'] = 'DropIn/After/All';
$arguments260['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output259 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
			';
return $output259;
};
$arguments255 = array();
$arguments255['section'] = NULL;
$arguments255['partial'] = NULL;
$arguments255['delegate'] = NULL;
$arguments255['arguments'] = array (
);
$arguments255['optional'] = false;
$arguments255['default'] = NULL;
$arguments255['contentAs'] = NULL;
$arguments255['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array257['0'] = 'true';

$expression258 = function($context) {return TRUE;};
$arguments255['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output211 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
				<div class="frame-space-after-';
$array269 = array (
);
$output268 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array269), ENT_QUOTES);

$output268 .= '"></div>
			';
return $output268;
};
$arguments263 = array();
$arguments263['then'] = NULL;
$arguments263['else'] = NULL;
$arguments263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array266);

$expression267 = function($context) {return ($context["node0"]);};
$arguments263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments263['__thenClosure'] = $renderChildrenClosure264;

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output211 .= '

		';
return $output211;
};
$arguments209 = array();
$arguments209['if'] = NULL;

$output137 .= '';

$output137 .= '
	';
return $output137;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array135);
$array134['1'] = ' != none';

$expression136 = function($context) {return (($context["node0"]) != "none");};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '

			<div id="c';
$array7 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array7), ENT_QUOTES);

$output6 .= '" class="frame frame-';
$array8 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.frame_class', $array8), ENT_QUOTES);

$output6 .= ' frame-type-';
$array9 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.CType', $array9), ENT_QUOTES);

$output6 .= ' frame-layout-';
$array10 = array (
);
$output6 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.layout', $array10), ENT_QUOTES);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array14);

$expression15 = function($context) {return ($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$output16 = '';

$output16 .= ' frame-space-before-';
$array17 = array (
);
$output16 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array17), ENT_QUOTES);
$arguments11['then'] = $output16;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array21);

$expression22 = function($context) {return ($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$output23 = '';

$output23 .= ' frame-space-after-';
$array24 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array24), ENT_QUOTES);
$arguments18['then'] = $output23;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_bsdist_visibility', $array28);

$expression29 = function($context) {return ($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$output30 = '';

$output30 .= ' ';
$array31 = array (
);
$output30 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.tx_bsdist_visibility', $array31), ENT_QUOTES);
$arguments25['then'] = $output30;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output6 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
					<a id="c';
$array38 = array (
);
$output37 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array38), ENT_QUOTES);

$output37 .= '"></a>
				';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array35);

$expression36 = function($context) {return ($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['section'] = NULL;
$arguments44['partial'] = NULL;
$arguments44['delegate'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['optional'] = false;
$arguments44['default'] = NULL;
$arguments44['contentAs'] = NULL;
$arguments44['partial'] = 'DropIn/Before/All';
$arguments44['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output43 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
				';
return $output43;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array41['0'] = 'true';

$expression42 = function($context) {return TRUE;};
$arguments39['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
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
$arguments52['partial'] = 'Header/All';
$arguments52['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
				';
return $output51;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array49['0'] = 'true';

$expression50 = function($context) {return TRUE;};
$arguments47['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['section'] = NULL;
$arguments55['partial'] = NULL;
$arguments55['delegate'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['optional'] = false;
$arguments55['default'] = NULL;
$arguments55['contentAs'] = NULL;
$arguments55['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array57['0'] = 'true';

$expression58 = function($context) {return TRUE;};
$arguments55['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['partial'] = 'Footer/All';
$arguments64['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
				';
return $output63;
};
$arguments59 = array();
$arguments59['section'] = NULL;
$arguments59['partial'] = NULL;
$arguments59['delegate'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['optional'] = false;
$arguments59['default'] = NULL;
$arguments59['contentAs'] = NULL;
$arguments59['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array61['0'] = 'true';

$expression62 = function($context) {return TRUE;};
$arguments59['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['section'] = NULL;
$arguments72['partial'] = NULL;
$arguments72['delegate'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['optional'] = false;
$arguments72['default'] = NULL;
$arguments72['contentAs'] = NULL;
$arguments72['partial'] = 'DropIn/After/All';
$arguments72['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
				';
return $output71;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array69['0'] = 'true';

$expression70 = function($context) {return TRUE;};
$arguments67['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output6 .= '
			</div>

		';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '

			<a id="c';
$array76 = array (
);
$output75 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array76), ENT_QUOTES);

$output75 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
				<a id="c';
$array83 = array (
);
$output82 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array83), ENT_QUOTES);

$output82 .= '"></a>
			';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array80);

$expression81 = function($context) {return ($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
				<div class="frame-space-before-';
$array90 = array (
);
$output89 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array90), ENT_QUOTES);

$output89 .= '"></div>
			';
return $output89;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array87);

$expression88 = function($context) {return ($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = $renderChildrenClosure85;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['partial'] = 'DropIn/Before/All';
$arguments96['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
			';
return $output95;
};
$arguments91 = array();
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array93['0'] = 'true';

$expression94 = function($context) {return TRUE;};
$arguments91['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['partial'] = 'Header/All';
$arguments104['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
			';
return $output103;
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
$arguments99['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array101['0'] = 'true';

$expression102 = function($context) {return TRUE;};
$arguments99['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output75 .= '
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
$arguments107['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array109['0'] = 'true';

$expression110 = function($context) {return TRUE;};
$arguments107['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['section'] = NULL;
$arguments116['partial'] = NULL;
$arguments116['delegate'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['optional'] = false;
$arguments116['default'] = NULL;
$arguments116['contentAs'] = NULL;
$arguments116['partial'] = 'Footer/All';
$arguments116['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
			';
return $output115;
};
$arguments111 = array();
$arguments111['section'] = NULL;
$arguments111['partial'] = NULL;
$arguments111['delegate'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$arguments111['default'] = NULL;
$arguments111['contentAs'] = NULL;
$arguments111['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array113['0'] = 'true';

$expression114 = function($context) {return TRUE;};
$arguments111['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['section'] = NULL;
$arguments124['partial'] = NULL;
$arguments124['delegate'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['optional'] = false;
$arguments124['default'] = NULL;
$arguments124['contentAs'] = NULL;
$arguments124['partial'] = 'DropIn/After/All';
$arguments124['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
			';
return $output123;
};
$arguments119 = array();
$arguments119['section'] = NULL;
$arguments119['partial'] = NULL;
$arguments119['delegate'] = NULL;
$arguments119['arguments'] = array (
);
$arguments119['optional'] = false;
$arguments119['default'] = NULL;
$arguments119['contentAs'] = NULL;
$arguments119['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array121['0'] = 'true';

$expression122 = function($context) {return TRUE;};
$arguments119['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
				<div class="frame-space-after-';
$array133 = array (
);
$output132 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array133), ENT_QUOTES);

$output132 .= '"></div>
			';
return $output132;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array130);

$expression131 = function($context) {return ($context["node0"]);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['__thenClosure'] = $renderChildrenClosure128;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output75 .= '

		';
return $output75;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#