<form class="navbar-form navbar-right" action="<?php echo home_url( '/' ) ?>">
				<div class="input-group">
					   	<input type="text" class="form-control" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
					    <div class="input-group-btn">
					     	<button class="btn btn-default" type="submit">
					      	  <i class="glyphicon glyphicon-search"></i>
					    	</button>
					    </div>
				</div>
</form>