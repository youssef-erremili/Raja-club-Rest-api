<div style="background: #272822; overflow:auto;width:auto;border:solid #00bc51;border-width:.1em .1em .1em .8em;padding: 1rem;"><pre style="margin: 0; line-height: 125%"><span style="color: #a6e22e">fetch</span><span style="color: #f8f8f2">(</span><span style="color: #f92672">&#39;https://fakestoreapi.com/products&#39;</span><span style="color: #f8f8f2">)</span>
    <span style="color: #f8f8f2">.</span><span style="color: #a6e22e">then</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">res</span><span style="color: #f92672">=&gt;</span><span style="color: #a6e22e">res</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">json</span><span style="color: #f8f8f2">())</span>
    <span style="color: #f8f8f2">.</span><span style="color: #a6e22e">then</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">json</span><span style="color: #f92672">=&gt;</span><span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">json</span><span style="color: #f8f8f2">))</span>
    <span style="color: #f8f8f2">.</span><span style="color: #66d9ef">catch</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">error</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
</pre></div>
<div class="mt-3">
    <x-button class="fetch">Fetch data</x-button>
</div>
<div class="mt-6 hidden data">
    <div style="background: #f8f8f8; overflow:auto;width:auto;border:solid #00bc51;border-width:.1em .1em .1em .8em;padding:1rem;"><pre style="margin: 0; line-height: 125%">
        {
            <span style="color: #BA2121">&quot;name&quot;</span><span style="color: #666666">:</span> <span style="color: #BA2121">&quot;Youssef&quot;</span>,
            <span style="color: #BA2121">&quot;last&quot;</span><span style="color: #666666">:</span> <span style="color: #BA2121">&quot;Erremili&quot;</span>,
            <span style="color: #BA2121">&quot;aa&quot;</span><span style="color: #666666">:</span> <span style="color: #BA2121">&quot;Erremili&quot;</span>,
            <span style="color: #BA2121">&quot;cc&quot;</span><span style="color: #666666">:</span> <span style="color: #BA2121">&quot;Erremili&quot;</span>,
            <span style="color: #BA2121">&quot;ss&quot;</span><span style="color: #666666">:</span> <span style="color: #BA2121">&quot;Erremili&quot;</span>
        }
        </pre></div>
</div>
