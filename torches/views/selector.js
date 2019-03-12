riot.tag2('selector', '<br><hr><br> <nav class="nav nav-pills"> <button class="btn btn-secondary border border-dark mx-auto" onclick="{pre}">Pre Mix</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{surface}">Surface Mix</button> </nav><br> <hr> <nav class="nav nav-pills"> <button class="btn btn-secondary border border-dark mx-auto" onclick="{nortel}">Nortel</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{gtt}">GTT/Glass Torch Technologies</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{bethlehem}">Bethlehem</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{carlisle}">Carlisle</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{national}">National</button> </nav><br><hr> <nav class="nav nav-pills"> <button class="btn btn-secondary border border-dark mx-auto" onclick="{soft}">Effetre Morreti Glass</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{soft}">Soft Glass</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{hard}">Pyrex</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{hard}">Hard Glass</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{hard}">Borosilicate</button> </nav><br><hr> <nav class="nav nav-pills"> <button class="btn btn-secondary border border-dark mx-auto" onclick="{glassblowing}">Glassblowing</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{pipemaking}">Pipemaking</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{lampwork}">Lampworking</button> <button class="btn btn-secondary border border-dark mx-auto" onclick="{beadmaking}">Beadmaking</button> </nav><br><hr>', '', '', function(opts) {

        this.pre = function(e){
            route('pre','Sundance Art Glass Torches - Pre Mix')
        }.bind(this)
        this.surface = function(e){
            route('surface','Sundance Art Glass Torches - Surface Mix')
        }.bind(this)
        this.nortel = function(e){
            route('company/nortel','Sundance Art Glass Torches - Nortel Torches')
        }.bind(this)
        this.gtt = function(e){
            route('company/gtt','Sundance Art Glass Torches - Glass Torch Technologies')
        }.bind(this)
        this.bethlehem = function(e){
            route('company/bethlehem','Sundance Art Glass Torches - Bethlehem Burners')
        }.bind(this)
        this.carlisle = function(e){
            route('company/carlisle','Sundance Art Glass Torches - Carlisle Torches')
        }.bind(this)
        this.glassblowing = function(e){
            route('uses/glassblowing','Sundance Art Glass Torches - Glassblowing Torches')
        }.bind(this)
        this.pipemaking = function(e){
            route('uses/pipemaking','Sundance Art Glass Torches - Pipemaking Torches')
        }.bind(this)
        this.lampworking = function(e){
            route('uses/lampworking','Sundance Art Glass Torches - Lampworking Torches')
        }.bind(this)
        this.beadmaking = function(e){
            route('uses/beadmaking','Sundance Art Glass Torches - Beadmaking Torches')
        }.bind(this)
        this.national = function(e){
            route('company/national','Sundance Art Glass Torches - National Torches')
        }.bind(this)
        this.soft = function(e){
            route('glass/soft','Sundance Art Glass Torches - Soft Glass Torches')
        }.bind(this)
        this.hard = function(e){
            route('glass/hard','Sundance Art Glass Torches - Hard Glass Torches')
        }.bind(this)
});