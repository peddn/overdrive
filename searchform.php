<form action="/" method="get"class="navbar-form navbar-right" role="form">

    <div class="form-group">
        <input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="suche">
    </div>

    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
    </button>
    
</form>