    
        
           
        <?php foreach ($filter->get() as $kk => $term): ?>
        <?php if ($taxonomy === 'category') : ?>
            <div class="is-2 itg_asp_label aligncenter <?php echo $taxonomy; ?>_filter_box itcatfilter">
                
                 <input type="radio" class="asp_radio"
                        value="<?php echo $term->id; ?>"
                     <?php echo $term->default ? 'data-origvalue="1"' : ''; ?>
                        name='<?php echo $filter->isMixed() ? "termset_single" : "termset[" . $taxonomy . "][]"; ?>'
                     <?php echo $term->selected ? ' checked="checked"' : ''; ?> aria-hidden="true">
                 <?php echo $term->label; ?>
               <label for="<?php echo $term->id; ?>"> </label>
            </div>
            
             <?php endif; ?>
            <?php endforeach; ?>
            
            
        <?php if ($taxonomy === 'post_tag') : ?>
        
            <div class="is-2 itgtag-filter">
              <a id="itg_tagfilterbtn" href="#">Argomento</a>
            </div>
            <div class="is-2 itgtag-filter">
              <a id="itg_tagfilterbtn" href="#">Periodo</a>
            </div>
            <div class="is-clearfix"></div>
            <div class="container">
             <div id="itg_tagfilterresults" class="column is-10 is-offset-2 pt-5" style="display: none;">
              <div class="columns">
               <?php foreach ($filter->get() as $kk => $term): ?>
                <div class="itg_asp_label aligncenter <?php echo $taxonomy; ?>_filter_box itgtagfilter column is-4">
                 
                   <input type="radio" class="asp_radio"
                          value="<?php echo $term->id; ?>"
                       <?php echo $term->default ? 'data-origvalue="1"' : ''; ?>
                          name='<?php echo $filter->isMixed() ? "termset_single" : "termset[" . $taxonomy . "][]"; ?>'
                       <?php echo $term->selected ? ' checked="checked"' : ''; ?>  aria-hidden="true">
                   <?php echo $term->label; ?>
                 <label for="<?php echo $term->id; ?>"></label>
                </div>
               <?php endforeach; ?>
              </div>
             </div>
            </div>
            
            
        <?php endif; ?>

         <script type="text/javascript">
          jQuery('#itg_tagfilterbtn').click(function(e){
           jQuery(this).toggleClass('active');
           jQuery('#itg_tagfilterresults').toggle();
           e.preventDefault();
          });
         </script>