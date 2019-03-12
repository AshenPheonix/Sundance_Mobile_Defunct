riot.tag2('glass', '<div class="col-12 col-md white flex-image"> <figure class="figure"> <img riot-src="{image}" class="figure-img img-fluid rounded" alt="{name}" style="max-height:100px"> <figcaption class="figure-caption text-xs-right">{id}: {name}</figcaption> </figure> </div> <div class="col-6 col-md text-right flex flex-text"> <span if="{test( \'1lb\')}"> 1lb -- ${code.pound}<br> </span> <span if="{test( \'11x11\')}"> 11x11 -- ${code.eleven}<br> </span> <span if="{test( \'13x13\')}"> 13x13 -- ${code.thirteen}<br> </span> <span if="{test( \'15\')}"> 15x15 -- ${code.fifteen}</span> <span if="{test( \'thin\')}"> 2mm -- ${code.thin} </span> </div> <div class="col-6 col-md flex flex-text"> <p class="red" if="{this.opts.glassdata.stock==false}">Sorry, Temporarily out of stock</p> <div if="{this.opts.glassdata.stock}"> <select name="size desired" ref="selected" class="form-control"> <option value="0">Select Size</option> <option show="{test(\'1lb\')}" riot-value="{pids[0]}">1lb -- ${code.pound}</option> <option show="{test(\'11x11\')}" riot-value="{pids[1]}">11x11 -- ${code.eleven}</option> <option show="{test(\'13x13\')}" riot-value="{pids[2]}">13x13 -- ${code.thirteen}</option> <option show="{test(\'15\')}" riot-value="{pids[3]}">15x15 -- ${code.fifteen}</option> <option show="{test(\'thin\')}" riot-value="{pids[4]}">2mm -- ${code.thin}</option> </select> <button type="button" class="btn btn-link btn-lg btn-block" onclick="{buy}"> <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"> </button> </div> </div>', '', '', function(opts) {
        this.on('mount', () => {
            let GlassData = this.opts.glassdata
            this.image = 'images/' + GlassData.image
            this.id = GlassData.id
            this.name = GlassData.name
            this.pids = GlassData.pids
            this.code = GlassData.code
            this.update();
        })

        this.test = function(which) {
            if (which == '1lb')
                return this.pids[0] != null
            else if (which == '11x11')
                return this.pids[1] != null
            else if (which == '13x13')
                return this.pids[2] != null
            else if (which == '15')
                return (this.code.fifteen != null && this.pids[3] != null)
            else
                return (this.code.thin != null && this.pids[4] != null)
        }.bind(this)

        this.buy = function(e) {
            window.location.href = "http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=" + this.refs.selected.value + "&qty=1";
        }.bind(this)
});