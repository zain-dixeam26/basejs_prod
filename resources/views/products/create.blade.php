<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        {{@$page_title}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
            ×
        </span>
        </button>
    </div>
    <form action="{{$action}}" method="post" data-action="make_ajax_file" data-action-after="reload" >
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="cat_id" class="control-label">Category</label>
                        
                        <select type='text' name="cat_id" id="cat_id" class="form-control" required="" >
                            @foreach($categories  as $key=>$val)
                            <option value="{{$val['cat_id']}}">{{$val['label']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="label" class="control-label">Label</label>
                        <input type='text' name="label" id="label" class="form-control" required="" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="price" class="control-label">Price</label>
                        <input type='text' name="price" id="price" class="form-control" required="" data-mask="number"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <textarea  name="description" id="description" class="form-control"  ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="feature" class="control-label">Feature</label>
                        <select class="form-control" data-s2="true"  name="feature">
                          <option value="warm">Warm</option>
                          <option value="shining">Shining</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="feature" class="control-label">Product</label>
                        <select class="form-control" data-s2-ajax="true" data-placeholder="Select a Product" data-url="{{url($module['action'].'/filter')}}" multiple="" >
                          <option value=""></option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image" class="control-label">Image</label>
                        <input type="file"  name="image" id="image" />
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info" >Add</button>
            <button type="reset" class="btn btn-danger">Clear</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>
</div> 