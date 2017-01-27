<h1>{{ poll.question }}</h1>

<h1>Polls</h1>

<table>
{% for option in options %}
    <tr>
        <td>{{ option.name }}</td>
        <td>{{ option.number_votes }}</td>
        <td>{{ link_to('poll/vote/' ~ option.id, 'Vote') }}</td>
    </tr>
{% endfor %}
</table>