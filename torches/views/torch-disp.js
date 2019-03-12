riot.tag2('torch-disp', '<button onclick="{back}" id="backButton">Back</button> <button onclick="{torch}">All Torches</button> <div class="row"> <div class="col"> <p ref="target"></p> </div> </div>', '', '', function(opts) {
        this.on('route',(company,name)=>{
            this.refs.target.innerTEXT="Now Loading, please wait"
            $('html, body').animate({scrollTop:$('#backButton').offset().top},'fast')
            $.post('scripts/grab.php',{"company":company,"name":name},(returned)=>{
                this.refs.target.innerHTML=returned;
                $('.carousel').carousel({
                    interval:1750,
                    pause:false
                })
            })
        })
        this.back = function(e){
            window.history.back()
        }.bind(this)
        this.torch = function(e){
            route('/','Sundance Art Glasss Torches')
        }.bind(this)
});