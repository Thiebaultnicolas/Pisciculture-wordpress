(function(api) {

    api.sectionConstructor['journey-turism-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });
  
    const journeytourismprosection_lists = ['banner', 'service'];
    journeytourismpro_section_lists.forEach(journeytourismpro_homepage_scroll);
  
    function journeytourismpro_homepage_scroll(item) {
        item = item.replace(/-/g, '');
        wp.customize.section('journey-turism_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
  })(wp.customize);