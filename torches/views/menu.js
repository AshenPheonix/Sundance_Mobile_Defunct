riot.tag2('menu', '<button onclick="{back}">Back to Menu</button><br><br> <div each="{data}" class="row beige border border-dark border-right-0 border-left-0" data-is="torch" torch="{this}"></div>', '', '', function(opts) {
        data=[];
        this.on('route',(which,what)=>{
            if(this.opts.opt!==undefined){
                $.post('scripts/sort.php', {sorter:this.opts.opt},(returned)=>{
                    this.data=JSON.parse(returned);
                    this.update()
                })
            }else{
                $.post('scripts/sort.php',{sorter:what, on:which},(returned)=>{
                    this.data=JSON.parse(returned);
                    this.update()
                })
            }
        })

        this.back = function(e){
            route('/','Sundance Art Glass Torches');
        }.bind(this)

});