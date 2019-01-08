<?php
/** @var $this NewsmanagerViewNewsmanager */
defined( '_JEXEC' ) or die; // No direct access
?>
<form action="index.php?option=com_newsmanager&view=newsmanager" method="POST" id="adminForm" name="adminForm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="1%"><?php echo JText::_('COM_NEWS_NUM')?></th>
                <th width="2%"><?php echo JHtml::_('grid.checkall');?></th>
                <th width="1%"><?php echo JText::_('COM_NEWS_ITEM_TITLE')?></th>
                <th width="1%"><?php echo JText::_('COM_NEWS_ITEM_STATE')?></th>
                <th width="1%"><?php echo JText::_('COM_NEWS_ITEM_ID')?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">
                    <div class="pagination">
                        <?php echo $this->pagination->getListFooter(); ?>
                    </div>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php if (!empty($this->items)) : ?>
                <?php foreach ($this->items as $i=>$row) : ?>
                    <?php $link='index.php?option=com_newsmanager&task=item.edit&id='.$row->id ?>
                    <tr>
                        <td><?php echo $this->pagination->getRowOffset($i) ?></td>
                        <td><?php echo JHtml::_('grid.id', $i, $row->id); ?></td>
                        <td><a href="<?php echo $link; ?>"><?php echo $row->title; ?></a></td>
                        <td align="center"><?php echo JHtml::_('jgrid.published', $row->published, $i, 'newsmanager.', true); ?></td>
                        <td align="center"><?php echo $row->id; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <input type="hidden" name="task" value=""/>
    <input type="hidden" name="boxchecked" value="0"/>

    <?php echo JHtml::_('form.token'); ?>

</form>
