riot.tag2('frit-renderer', '<div class="row beige border border-dark border-right-0 border-left-0" each="{store}" data-is="frit" glassdata="{this}"></div>', '', '', function(opts) {
        this.store=[]
        this.on('mount',()=>{
            this.store=this.opts.store;
            this.update();
        })
        this.on('update',()=>{
        })
});