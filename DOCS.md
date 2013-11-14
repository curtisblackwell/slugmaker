{{ noparse }}
<div class="alert alert-info">
  <p><strong>You don't need this plugin.</strong></p>
  <p>Most of the time, <a href="http://statamic.com/learn/documentation/variable-modifiers/slugify">slugify</a> gets the job done. However, variable modifiers don't work on plugins.</p>
</div>

### `{{ slugmaker }}`
`{{ slugmaker }}` makes slugs out of the content within its tag pair.
      
    {{ slugmaker }}{{ some_plugin param="val" }}{{ /slugmaker }}

#### Optional Setting
##### lower
    lower=""

To make sure letters are lowercase, use the lower parameter.
  
    {{ slugmaker lower="true" }}{{ some_plugin param="val" }}{{ /slugmaker }}
{{ /noparse }}