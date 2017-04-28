---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: Form Elements
---
@verbatim
# Form Elements
----------

<form class="form-horizontal" method="get">
<div class="form-group">
  <label class="col-sm-4 control-label">With help</label>
  <div class="col-sm-8">
    <input type="text" class="form-control">
    <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Placeholder</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" placeholder="placeholder">
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Disabled</label>
  <div class="col-sm-8">
    <input class="form-control" type="text" placeholder="Disabled input here..." disabled="">
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Rounded</label>
  <div class="col-sm-8">
    <input type="text" class="form-control rounded">                        
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">CSS3 Checkboxes &amp; radios</label>
  <div class="col-sm-8">
    <div class="checkbox">
      <label class="i-checks">
        <input type="checkbox" value="">
        <i></i>
        Option one
      </label>
    </div>
    <div class="checkbox">
      <label class="i-checks">
        <input type="checkbox" checked="" value="">
        <i></i>
        Option two checked
      </label>
    </div>
    <div class="checkbox">
      <label class="i-checks">
        <input type="checkbox" checked="" disabled="" value="">
        <i></i>
        Option three checked and disabled
      </label>
    </div>
    <div class="checkbox">
      <label class="i-checks">
        <input type="checkbox" disabled="" value="">
        <i></i>
        Option four disabled
      </label>
    </div>
    <div class="radio">
      <label class="i-checks">
        <input type="radio" name="a" value="option1">
        <i></i>
        Option one
      </label>
    </div>
    <div class="radio">
      <label class="i-checks">
        <input type="radio" name="a" value="option2" checked="">
        <i></i>
        Option two checked
      </label>
    </div>
    <div class="radio">
      <label class="i-checks">
        <input type="radio" value="option2" checked="" disabled="">
        <i></i>
        Option three checked and disabled
      </label>
    </div>
    <div class="radio">
      <label class="i-checks">
        <input type="radio" name="a" disabled="">
        <i></i>
        Option four disabled
      </label>
    </div>
    <div class="radio">
      <label class="i-checks i-checks-sm">
        <input type="radio" name="a">
        <i></i>
        Small size radio
      </label>
    </div>
    <div class="checkbox">
      <label class="i-checks i-checks-sm">
        <input type="checkbox">
        <i></i>
        Small size checkbox
      </label>
    </div>
    <div class="m-b-xs m-t">
      <label class="i-checks i-checks-lg">
        <input type="radio" name="a">
        <i></i>
        Large size radio
      </label>
    </div>
    <div class="checkbox">
      <label class="i-checks i-checks-lg">
        <input type="checkbox">
        <i></i>
        Large size checkbox
      </label>
    </div>
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Inline checkboxes</label>
  <div class="col-sm-8">
    <label class="checkbox-inline i-checks">
      <input type="checkbox" value="option1"><i></i> a
    </label>
    <label class="checkbox-inline i-checks">
      <input type="checkbox" value="option2"><i></i> b
    </label>
    <label class="checkbox-inline i-checks">
      <input type="checkbox" value="option3"><i></i> c
    </label>
  </div>
</div>

<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Switch</label>
  <div class="col-sm-8">
    <label class="i-switch m-t-xs m-r">
      <input type="checkbox" checked="">
      <i></i>
    </label>
    <label class="i-switch bg-info m-t-xs m-r">
      <input type="checkbox" checked="">
      <i></i>
    </label>
    <label class="i-switch bg-primary m-t-xs m-r">
      <input type="checkbox" checked="">
      <i></i>
    </label>
    <label class="i-switch bg-danger m-t-xs m-r">
      <input type="checkbox" checked="">
      <i></i>
    </label>
  </div>
</div>

<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Radio Switch</label>
  <div class="col-sm-8">
    <label class="i-switch bg-primary m-t-xs m-r">
      <input type="radio" name="switch" checked="">
      <i></i>
    </label>
    <label class="i-switch bg-warning m-t-xs m-r">
      <input type="radio" name="switch">
      <i></i>
    </label>
  </div>
</div>

<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Switch size</label>
  <div class="col-sm-8">
    <label class="i-switch i-switch-md bg-info m-t-xs m-r">
      <input type="checkbox" checked="">
      <i></i>
    </label>
    <label class="i-switch i-switch-lg bg-dark m-t-xs m-r">
      <input type="checkbox">
      <i></i>
    </label>
  </div>
</div>

<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Select</label>
  <div class="col-sm-8">
    <select name="account" class="form-control m-b">
      <option>option 1</option>
      <option>option 2</option>
      <option>option 3</option>
      <option>option 4</option>
    </select>
    <div class="col-lg-4 m-l-n">
      <select multiple="" class="form-control">
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option>option 4</option>
      </select>
    </div>
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group has-success">
  <label class="col-sm-4 control-label">Input with success</label>
  <div class="col-sm-8">
    <input type="text" class="form-control">
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group has-warning">
  <label class="col-sm-4 control-label">Input with warning</label>
  <div class="col-sm-8">
    <input type="text" class="form-control">
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group has-error">
  <label class="col-sm-4 control-label">Input with error</label>
  <div class="col-sm-8">
    <input type="text" class="form-control">
  </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
  <label class="col-sm-4 control-label">Control sizing</label>
  <div class="col-sm-8">
    <input class="form-control input-lg m-b" type="text" placeholder=".input-lg">
    <input class="form-control m-b" type="text" placeholder="Default input">
    <input class="form-control input-sm" type="text" placeholder=".input-sm">
  </div>
</div>

</form>
  



@endverbatim
