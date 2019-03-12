riot.tag2('search', '<item each="{items}" data="{this}"></item> <button show="{past!=undefined}" onclick="{past}">Previous Page</button> <button show="{next!=undefined}" onclick="{next}">Next Page</button>', '', '', function(opts) {
        self=this
        this.on('mount',function(){
            this.items=searchStore.items;
            this.next=searchStore.queries.nextPage
            this.past=searchStore.queries.previousPage
            this.update();
        })

        this.past = function(e){
            $.get('https://www.googleapis.com/customsearch/v1',
            self.past,
            function(res){
                self.past.lowRange-=6;
                if(self.past.lowRange<0){
                    self.past=undefined
                }
                self.items=res.items;
                self.next[0].startIndex-=6;
                self.update();
            })
        }.bind(this)

        this.next = function(e){
            $.get('https://www.googleapis.com/customsearch/v1',{
                cx:"000409918650992771376:z7zjmcijfh4",
                q:this.next[0].searchTerms,
                key:"AIzaSyDLyVf5L2ZgbMk6gaZyxa-WD96G3qkALog",
                lowRange:this.next[0].startIndex,
                num:6,
                excludeTerms: '.pdf kilnwashhowto.php'
            },function(res){
                self.next[0].startIndex+=6
                if(self.next[0].startIndex>=res.queries.nextPage[0].totalResults){
                    self.next=undefined;
                }
                self.items=res.items
                self.past={
                    q:res.queries.request[0].searchTerms,
                    cx:"000409918650992771376:z7zjmcijfh4",
                    key:"AIzaSyDLyVf5L2ZgbMk6gaZyxa-WD96G3qkALog",
                    lowRange:res.queries.request[0].lowRange-6,
                    num:6,
                    excludeTerms: '.pdf kilnwashhowto.php'
                }
                self.update();
            })
        }.bind(this)

});



riot.tag2('raw', '<span></span>', '', '', function(opts) {
    this.root.innerHTML=opts.html
});