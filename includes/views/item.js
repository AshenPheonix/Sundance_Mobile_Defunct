riot.tag2('item', '<div class="row" onclick="{go}"> <div class="col-2"> <img riot-src="{image}" class="float-left img-fluid"> </div> <div class="col-10"> <div class="row"> <div class="col-12 text-left searchTitle"> {title} </div> </div> <div class="row" class="searchDesc"> <div class="col-12 text-left"> <p class="searchDesc">{description}</p> </div> </div> </div> </div> <br> <hr>', 'item,[data-is="item"]{ cursor:pointer; } item .searchTitle,[data-is="item"] .searchTitle{ font-weight:bold; font-size:large; } item .searchDesc,[data-is="item"] .searchDesc{ font-weight:small; }', '', function(opts) {
        core=this.opts.data
        if(core.pagemap.cse_image!=undefined)
           this.image=core.pagemap.cse_image[0].src
        this.title=core.htmlTitle
        this.description=core.snippet
        this.link=core.formattedUrl

        this.on('mount',()=>{
        })

        this.go = function(e){
            window.location.href=this.link
        }.bind(this)
});