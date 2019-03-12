<div class="col-10 my-1">
    <div id="searchBox">
        <input type="text" id="searchBar" placeholder="Search Sundance">
        <button type="button" class="btn btn-default" id="searchButton">Search</button>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Search Results" id="resultsModal" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Search Results</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="render-target">
                <div id="results">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>