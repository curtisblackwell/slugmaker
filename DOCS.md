{{ noparse }}
### You Don't Need This Plugin
Most of the time, [slugify](http://statamic.com/learn/documentation/variable-modifiers/slugify) gets the job done. However, variable modifiers don't work on plugins.

### The Tag
Wrap the content to be parsed in `{{ slugmaker }}` tags.
      
    {{ slugmaker }}{{ some_plugin param="val" }}{{ /slugmaker }}

### Lowercase
Making slugs often requires lowercase characters as well. To do so, use the lower parameter.
  
    {{ slugmaker lower="true" }}

You can pass any value that evaluates to true (`yes` or `1` for example).
{{ /noparse }}
