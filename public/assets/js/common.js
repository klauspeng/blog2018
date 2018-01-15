$(function(){
    // highlight
    hljs.initHighlightingOnLoad();
    // markdown a标签点击新标签打开
    $.each($('p a'), function(){
        this.setAttribute('target', '_blank');
    });
});