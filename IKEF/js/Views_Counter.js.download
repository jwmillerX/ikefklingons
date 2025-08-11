var VCR = function( $container, type, id, options )
{
    this.$container = $container;
    this.type = type;
    this.id = id;
    this.options = options;
    
    this.ajaxPost = function(action, obj, cb) {
        $.post('/_zbl.ajax?m=' + this.id + '&type=' + this.type + '&zbl=1&a=' + action, {'data': obj}, function(response) {
            (cb || $.noop)(response);
        }, 'json');
    }
    
    this.refreshContent = function( opts )
    {
        var cnt = opts.counter.value.split("");
        var $digits = $(".digit", this.$container);
        for( var i=0; i<$digits.size(); i++ )
        {
            $( $digits[i] ).html( cnt[i] );
        }
    }
    
    this.incrementCounter = function()
    {
        var _this = this;
        this.ajaxPost("incrementCounter", {}, function(response) {
            _this.refreshContent(response.response);
        },"json");
    }
}


var Views_CounterRender = function($container, options)
{
    var containerid = $container.attr("id").split('--');
    var p = new VCR( $container, containerid[0], containerid[1], options );
    p.incrementCounter(); 
}