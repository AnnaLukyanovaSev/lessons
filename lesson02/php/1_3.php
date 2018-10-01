<?php
$text='Most work in text retrieval aims at presenting the information held by several texts in order to give entry clues towards these texts and to allow a navigation between them. Besides, a lesser interest is dedicated to the definition of principles for accessing content of single documents. As most information retrieval systems return documents from an initial request made of words, a usual solution consists of presenting document titles and highlighting words of the request inside a passage or in the whole document. Such a presentation does not allow a rapid reading and systems cannot satisfy themselves with it. Our studies lead us to provide indicative and informative view of texts as in summarization systems. We offer the user different levels of abstraction of a text: the first is a global overview, where global topics are indicated and positioned in the text. The second level of abstraction goes deeper in the topic description by adding local topics and information about the argumentative role of the segments. In this paper, we will detail the extraction of thematic descriptors and meta-descriptors that relies on recurrence -respectively in a text or in the corpus- and how their characterization provides the segment structuring.';
$num=strlen($text);
$to_end='...';
if ($num>50)
$short_str=substr($text,0,47);
$short_str_1=rtrim($short_str,' ');
$result=$short_str_l.$to_end;
echo strlen($short_str);
?>