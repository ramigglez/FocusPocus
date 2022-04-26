<?php

function doctype ($print = true) {
    $objeto = new Piezas4websitesClass;
    $doctype = $objeto->_createHeaderString('!DOCTYPE',['html']);
    if($print){
        echo $doctype;
    }else{
        return $doctype;
    }
}

function head ($content = null,$print = true) {
    $obj = new Piezas4websitesClass;
    $head = $obj->createHeaderString('head',[]);
    $_head = $obj->createHeaderString('head',[],1);
    if($print){
        echo $head;
        if ($content === null) {
            echo "<title>My Page</title>";
        } else {
            if (is_array($content)) {
                echo implode('',$content);
            } else {
                echo $content;
            }
        }
        echo $_head;
    }else{

        if ($content === null) {
            $element = $head."<title>My Page</title>".$_head;
        } else {
            if (is_array($content)) {
                $element = $head.implode('',$content).$_head;
            } else {
                $element = $head.$content.$_head;
            }
        }

        return $element;

    }
}

function mixedAttrList ($mixed = []) {
    $obj = new Piezas4websitesClass;
    $attrsList = $obj->createAttrsMixedList($mixed);
    return $attrsList;
}

function mixAttrTag ($tag,$attrs,$or = 0) {
    if ($or === 1) {
        return "</{$tag}>";
    } else {
        $attrsList = call_user_func('mixedAttrList',$attrs);
        return "<{$tag}{$attrsList}>";
    }
}

#standard (generic) tag function
function tag ($tag,$attrs,$content,$special_chars) {
    if ($attrs === null) {
        $tag_ = "<{$tag}>";
    } else {
        $tag_ = mixAttrTag($tag,$attrs);
    }
    $_tag = mixAttrTag($tag,null,1);
    if (is_array($content)) {
        $_content_ = implode('',$content);
    } else {
        $_content_ = $content;
    }
    if ($special_chars) {
        return htmlspecialchars($tag_.$_content_.$_tag);
    } else{
        return $tag_.$_content_.$_tag;
    }
    
}

#tag sin atributos
function _tag ($tag,$content,$special_chars = false) {

    return tag($tag,null,$content,$special_chars);

}

#tag vacia
function __tag ($tag,$special_chars = false) {

    return tag($tag,null,null,$special_chars);

}

#tag con atributos key => value
function kvtag ($tag,$attr,$content,$special_chars = false) {

    $keyVal = [
        'keyval' => $attr,
        'inline' => []
    ];

    return tag($tag,$keyVal,$content,$special_chars);

}

#tag con atributos key => value & empty
function kvtag_ ($tag,$attr,$special_chars = false) {

    $keyVal = [
        'keyval' => $attr,
        'inline' => []
    ];

    return tag($tag,$keyVal,null,$special_chars);

}

#tag con atributos inline
function iltag ($tag,$attr,$content,$special_chars = false) {

    $inLine = [
        'keyval' => [],
        'inline' => $attr
    ];

    return tag($tag,$inLine,$content,$special_chars);

}

#tag con atributos inline & empty
function iltag_ ($tag,$attr,$special_chars = false) {

    $inLine = [
        'keyval' => [],
        'inline' => $attr
    ];

    return tag($tag,$inLine,null,$special_chars);

}

function body (array $atttributes = [],$content = null,$print = true) {
    $obj = new Piezas4websitesClass;
    $body = $obj->createHeaderString('body',$atttributes);
    $_body = $obj->createHeaderString('body',[],1);
    if($print){
        echo $body;
        if ($content === null) {
            echo "<h3>Hello World.</h3>";
        } else {
            if (is_array($content)) {
                echo implode('',$content);
            } else {
                echo $content;
            }
        }
        echo $_body;
    }else{
        if ($content === null) {
            $element = $body."<h3>Hello World.</h3>".$_body;
        } else {
            if (is_array($content)) {
                $element = $body.implode('',$content).$_body;
            } else {
                $element = $body.$content.$_body;
            }
        }
        return $element;
    }
}

function page ($headContent = null,$bodyContent = null,array $bodyAttrs = [],$print = true) {
    $obj = new Piezas4websitesClass;
    $html = $obj->createHeaderString('html',['lang'=>'en']);
    $_html = $obj->createHeaderString('html',[],1);
    if($print){
        call_user_func("doctype");
        echo $html;
            head($headContent);
            body($bodyAttrs,$bodyContent);
        echo $_html;
    }else{
        $page = doctype(false).$html.head($headContent,false).body($bodyAttrs,$bodyContent,false).$_html;
        return htmlspecialchars($page);
    }
}

function article ( string|array $title, string|array $text, string $image, string $link, string|array $linkTxt , string|array $othTxt) {

    return kvtag('article',[
        'class' => 'project',
        'style' => 'margin: 1rem;'
    ],[
        _tag('h2',$title),
        kvtag('p',[
        'style' => 'font-size:40px'
        ],$othTxt),
        _tag('p',$text),
        kvtag_('img',[
            'src' => $image
        ]),
        kvtag('a',[
            'href' => $link,
            'class' => 'button',
            'target' => 'blank'
        ],$linkTxt)
    ]);

}