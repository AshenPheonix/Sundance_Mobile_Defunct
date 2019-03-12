riot.tag2('renderer', '<div class="row beige border border-dark border-right-0 border-left-0" each="{store}" data-is="glass" glassdata="{this}"></div>', '', '', function(opts) {
        this.store=[]
        this.on('mount',()=>{
            $.each(this.opts.store,(i,e)=>{
                if(e.type==this.opts.type && e.stock){
                    this.store.push(e)
                }
            })
            this.update();
        })
        this.on('update',()=>{
        })
});