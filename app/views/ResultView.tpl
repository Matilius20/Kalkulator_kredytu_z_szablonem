{block name = table}

<table id="tab_result" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Lata</th>
		<th>Oprocentowanie</th>
		<th>Rata</th>
	</tr>
</thead>
<tbody>
{foreach $results as $r}
{strip}
	<tr>
		<td>{$r["kwota"]}</td>
		<td><center>{$r["lata"]}</center></td>
                <td><center>{$r["oprocentowanie"]}</center></td>
                <td>{$r["rata"]}</td>
		
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

<br>
<a href="{$conf->action_url}calcShow"  class="pure-menu-heading pure-menu-link">Powrót do kalkulatora</a>

{/block}

