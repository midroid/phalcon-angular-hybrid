<h1>Polls</h1>

<ul>
{% for poll in polls %}
    <li>{{ link_to('/poll/show/' ~ poll.id, poll.question) }}</li>
{% endfor %}
</ul>