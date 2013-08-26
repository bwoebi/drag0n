<?php $menuPrefix = ".cbp-spmenu-"; ?>
<?php $menuPrefix2 = nav."#".substr($menuPrefix,1); ?>

<?=WS(body)
	->position(absolute)
	->height("100%")
	->width("100%")
	->overflow(hidden)
	->cursor(_default_)
	->padding(0)
	->margin(0)
	->background('url(/Interface/img/bg.jpg)', "no-repeat", center, center, fixed)
	->color(white)
	->userSelect(none)
->end?>

<?=WS("#container")
	->padding->top(25)
	->padding->bottom(25)
->end?>

<?=WS(button, input."[type=text]")
	->background(black)
	->color(white)
	->borderRadius(10)
	->outline(none)
->end?>

<?=WS(input."[type=text]")
	->padding(3, 3, 3, 3)
->end?>

<?=WS($menuPrefix."horizontal")
	->padding->left(10)
	->padding->right(10)
->end?>

<?=WS(nav)
	->background->rgba(0,0,0, 0.5)
->end?>

<?=WS($menuPrefix2."s3")
	->text->align(center)
->end?>

<?=WS($menuPrefix2."s3 a")
	->text->align(center)
	->verticalAlign(center) #
	->position(relative)
	->display(inlineBlock)
	->margin(0, auto)
	->margin->top(15)
	->padding->left(20)
	->padding->right(20)
	->width(120)
	->color(lime)
	->font->size(25)
	->text->decoration(none)
	->borderRadius(25)
->end?>	

<?=WS("nav a")
	->color(lime)
->end?>

<?=WS("nav a:hover", "nav a:focus")
	->background->rgba(4, 100, 14, 0.3)
->end?>

<?=WS($menuPrefix2."s3 a img")
	->width(80)
	->margin->left(auto)
	->margin->right(auto)
->end?>

<?=WS($menuPrefix2."s3 a img", $menuPrefix2."s3 a span")
	->display(block)
->end?>

<?=WS("#searchbox")
	->width("87%")
	->display(block)
	->margin->left(auto)
	->margin->right(auto)
->end?>

<?=WS(".navtitle")
	->float(right)
	->margin->right(-90)
	->margin->top(-55)
->end?>

<?=WS("#container")
	->overflow(hidden)
->end?>

<?=WS("#selectBar")
	->width("100%")
	->display(inlineBlock)
	->color(lime)
	->text->align(center)
	->height(55)
	->position(absolute)
	->top(0)->left(0)->right(0)
	->padding->top(5)
	#->zIndex(5)
->end?>

<?=WS("#selectBar * img")
	->margin->left(10)
	->margin->right(10)
	->height(40)
->end?>
<?=WS("#sb1")->float(left)->end?>
<?=WS("#sb3")->float(right)->end?>

<?=WS(a)
	->color(lime)
	->cursor(normal)
->end?>

<?=WS("#main")
	->position(absolute)
	->left(10)
	->right(10)
	->bottom(40)
	->top(60)
	->overflow->y(auto)
	->overflow->x(hidden)
->end?>

<?=WS("#activity")
	->position(absolute)
	->bottom(0)
	->left(0)
	->right(0)
	->height(20)
	->background->rgba(0,0,0, 0.5)
	->color(lime)
	->padding(10, 10, 10, 10)
->end?>

<?=WS("#progIndic")
	->height(20)
	->margin->right(10)
->end?>

<?=WS("#progInfo")
	->display(inline)
->end?>

<?=WS("#showConsole")
	->position(absolute)
	->right(10)
	->bottom(5)
	->height(30)
->end?>

<?=WS("#console")
	->font->family("Andale Mono")
	->whiteSpace(pre)
	->cursor(auto)
	->userSelect(text)
->end?>

<? $console = "#console div."; ?>
<?=WS($console."status")
	->font->weight(bold)
->end?>

<?=WS($console."error")
	->color(red)
->end?>

<?=WS($console."cmd")
	->font->weight(silver)
->end?>

<?=WS($console."success")
	->color(lime)
	->font->weight(bold)
->end?>

<?=WS($console."debug")
	->font->style(italic)
->end?>