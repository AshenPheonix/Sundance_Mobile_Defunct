riot.tag2('frit', '<div class="col white p-1"> <img riot-src="{image}" class="img-fluid border border-dark"> </div> <div class="w-100"></div> <div class="col-12 text-center">{number} - {color}</div> <div class="w-100"></div> <div class="col-4 flex-text"> <select ref="size" onchange="{update}"> <option value="-1">Select Size</option> <option value="Powder">Powder</option> <option value="Fine">Fine</option> <option value="Medium">Medium</option> <option value="Coarse">Coarse</option> </select> </div> <div class="col-4 flex-text"> <select ref="amount"> <option value="0">Select Amount</option> <option each="{list}" if="{stock[refs.size.value]}" riot-value="{this.pid}">{this.printed}</option> </select> </div> <div if="{out!==\'all\' && refs.size.value!==-1 && stock[refs.size.value]}" class="col-4 flex-text"> <button onclick="{buy}" class="btn btn-link"> <img class="img-fluid" src="/mobile/images/cart_button_1.png"> </button> </div> <div if="{out==\'all\' && refs.size.value!==-1 && stock[refs.size.value]==false}" class="col-4 flex-text"> <p class="red font-weight-bold ">Temporarily out of Stock</p> </div>', '', '', function(opts) {
        this.on('before-mount',()=>{
            let GlassData = this.opts.glassdata
            this.out=GlassData.out || []

            this.stock={Powder:true,Fine:true,Medium:true,Coarse:true}
            if(this.out){
                if(this.out.Powder==false){
                    this.stock.Powder=false
                }
                if(this.out.Fine==false){
                    this.stock.Fine=false
                }
                if(this.out.Medium==false){
                    this.stock.Medium=false
                }
                if(this.out.Coarse==false){
                    this.stock.Coarse=false
                }
            }
        })

        this.on('mount',()=>{
            let GlassData = this.opts.glassdata
            this.image = 'frit_images/' + GlassData.image
            this.number = GlassData.number
            this.color = GlassData.color
            this.types = GlassData.types
            this.update();
        })

        this.on('update',()=>{
            if(this.refs.size==-1){
                this.list= []
            }else{
                let temp=this.types[this.refs.size.value]
                this.list= temp;
            }
        })

        this.buy = function(e){
            if(this.refs.amount.value==0){
                $('#errorModal').trigger('err:on',{message:'No volume selected, please select a volume'})
            }else{
                window.location.href='http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid='+this.refs.amount.value+'&qty=1';
            }
        }.bind(this)

        this.test = function(){

            let temp=this.types[this.refs.size.value]
            if(temp==undefined)
                return false;
            return (temp[0].tag!==undefined && temp[1].tag!==undefined&&temp[2].tag!==undefined)
        }.bind(this)
});