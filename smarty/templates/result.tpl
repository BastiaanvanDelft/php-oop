{extends file="templates/layout.tpl"}

{block name="content"}
    <h1 class="mt-5">Results</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">waarde</th>
        </tr>
        </thead>
        <tbody>
        {foreach $data as $key => $item}
            <tr>
                <th scope="row">{$key}</th>
                <td colspan="2">{$item}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/block}