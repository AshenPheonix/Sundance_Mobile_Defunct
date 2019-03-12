riot.tag2('torch', '<div class="col sel" onclick="{link}"> <img class="img-fluid" riot-src="{image}" alt="{name} Torch"> </div> <div class="w-100"></div> <div class="col sel py-2"> <span class="font-weight-bold text-capitalize">{displayName}</span><br> Useful for: <ul class="mx-auto"> <li each="{value, i in uses}" class="px-1 mx-auto">{value}</li> </ul><br> <button class="btn btn-link" if="{stock && name!=\'Ranger\' && name!=\'Multimix Jr\'}" onclick="{link}">View Description and purchase</button> <a if="{stock && name==\'Ranger\'}" href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=e808c65db786f8653b25acac7259eb37"> <img class="img-fluid my-2" src="/mobile/images/cart_button_3.png"> </a> <a if="{stock && name==\'Multimix Jr\'}" href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=8d1a686056124a53876c1a4bb04417e9"> <img class="img-fluid my-2" src="/mobile/images/cart_button_3.png"> </a> <span if="{!stock}" class="red">Product Temporarily Out Of Stock, Can Still Have Shipped from the Manufacturer<strong if="{time!==undefined}"> {time} Day shipping delay</strong></span> </div>', 'torch .sel:hover,[data-is="torch"] .sel:hover{ cursor:pointer; } torch ul,[data-is="torch"] ul{ list-style-type:none; margin:0; padding:0; overflow:hidden; } torch li,[data-is="torch"] li{ float:left; display:block; text-align:center; } torch img,[data-is="torch"] img{ max-height:108px; }', '', function(opts) {
    this.on('mount',()=>{
        let temp=this.opts.torch;
        this.company=temp.company
        this.name=temp.name
        this.gas=temp.gas
        if(temp.image=='undefined')
            this.image='other/missing.png'
        else
            this.image=this.company+'/images/'+temp.image
        this.list=temp.list
        this.ours=temp.ours
        this.stock=temp.stock
        this.glass=temp.glass
        this.uses=temp.uses
        this.time=temp.time
        if(this.name=='Ranger' || this.name=='Multimix Jr')
            this.link=undefined;
        else
            this.link='product/'+this.company+'/'+this.name.replace(/ /g,'_');
        this.displayName=this.company.replace(/_/g,' ') + ' - ' + this.name;
        this.display="Sundance Art Glass Torch -  " + this.displayName[0].toUpperCase() + this.company.slice(1) + " " + this.name
        this.update()
    })
    this.link = function(e){
        if(this.link!==undefined)
            route(this.link,this.display)
    }.bind(this)
});