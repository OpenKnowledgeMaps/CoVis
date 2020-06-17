var data_config = {
    tag: "visualization",
    mode: "gsheets",
    service_name: "Google Sheets",
    
    bubble_min_scale: 1.1,
    bubble_max_scale: 1.1,
    
    paper_min_scale: 1,

    title: "Knowledge Map of <b>COVID-19 research</b>",
    input_format: "json",
    base_unit: "questions",
    use_area_uri: true,
    preview_type: "pdf",
    
    show_multiples: false,
    show_dropdown: false,
    show_intro: false,
    show_list:true,
    is_force_papers: true,
    is_title_clickable: false,
    show_infolink: true,
    show_infolink_areas: false,
	
    show_context: true,
    create_title_from_context: false,
    show_context_timestamp: true,
    show_loading_screen: true,
    
    scale_toolbar: false,
    
    content_based: true,
    
    is_force_areas: true,
    area_force_alpha: 0.03,
    papers_force_alpha: 0.2,
    
    language: "eng_covis",
    
    sort_options: ["year", "title", "area"],
    filter_options: ["all", "Journal Article", "Preprint", "ReFigure", "Review"],
    filter_field: "resulttype",
    
    show_keywords: true,
    hide_keywords_overview: false,
    show_tags: true,
    show_comments: true,
    show_resulttype: true,
    
    sort_menu_dropdown: true,
    filter_menu_dropdown: true,
    
    share_modal: true,
    hashtags_twitter_card: "COVID19,openscience,discovery",
    
    intro: {
      title:"Knowledge Map of COVID-19 research curated by experts"
      , body: "<h3>About Covis</h3><p>For the development of therapeutics and vaccines for COVID-19, scientists need reliable research results. To support them, Open Knowledge Maps and ReFigure have launched CoVis. CoVis provides a curated knowledge map of seminal works on COVID-19 from eight critical areas of biomedical research. The knowledge map is constantly evolving thanks to the collective editing of subject-matter experts. CoVis enables you to spend less time on reviewing COVID-19 literature and more time on your research.</p><p><a class='link-popup' href='faqs'>Read our FAQs to find out more</a>.</p><h3>Data Source curated by ReFigure</h3><p>This collection is not exhaustive, but rather a single reference point for definitive research in select areas of coronavirus and COVID-19 research. The resources in CoVis are curated by a team of curators and contributors. Given the fast pace of research and the limited historical data on COVID-19, many findings are under debate and only understandable after reading several reports from different sources. Team <a target='_blank' class='link-popup' href='https://refigure.org/'>ReFigure</a> creates visual, easy to understand, annotated, figure collections which provide analyses and consensus on key issues. Boston based scientists and ReFigure founders Drs. Goyal and Akin are immunology experts and also form our starting database curation team.</p><p>Find out more about the curation process and the methodology for paper inclusion <a class='link-popup' href='faqs#methodology'>in our FAQs</a>. We invite subject-matter experts to help us with our efforts. If you would like to contribute to CoVis, <a class='link-popup' href='faqs#contribute'>find out more here</a>.</p><h3>Software created by Open Knowledge Maps</h3><p>The resources selected for inclusion in the CoVis are visualized in a knowledge map. Knowledge maps provide an instant overview of a topic by showing the main areas at a glance, and resources related to each area. This makes it possible to easily identify useful, pertinent information. The knowledge map is based on award-winning software <a target='_blank' class='link-popup' href='https://openknowledgemaps.org/'>developed by Open Knowledge Maps</a>.</p><p>Areas are displayed as bubbles. By clicking on one of the bubbles, you can inspect the resources assigned to it; open access papers can be directly viewed and downloaded within the interface. The size of the bubbles is relative to the number of resources assigned to it. Closeness of bubbles implies subject similarity. The closer two bubbles, the closer they are subject-wise. Centrality of bubbles implies subject similarity with the rest of the map, not importance. The closer a bubble is to the center, the closer it is subject-wise to all the other bubbles in the map.</p><p><a class='link-popup' href='faqs#knowledge-map'>Read our FAQs to find out more</a></p>"
    },
    
    localization: {
        eng_covis: {
            loading: "Updating and retrieving map. This may take a few seconds, please hold on.",
            search_placeholder: "Search within map...",
            show_list: "Show list",
            hide_list: "Hide list",
            intro_label: "curated by experts",
            intro_icon: "",
            relevance: "relevance",
            readers: "citations",
            year: "date",
            authors: "authors",
            title: "title",
            area: "Area",
            backlink: "← Back to overview",
            backlink_list: "← Show all documents in area",
            backlink_list_streamgraph: "← Show all documents",
            backlink_list_streamgraph_stream_selected: "← Show all documents in stream",
            keywords: "Keywords",
            no_keywords: "n/a",
            no_title: "No title",
            overview_label: 'Overview of',
            streamgraph_label: 'Streamgraph for',
            overview_authors_label: 'Overview of the works of',
            streamgraph_authors_label: 'Streamgraph for the works of',
            articles_label: 'resources',
            most_recent_label: 'most recent',
            most_relevant_label: 'most relevant',
            most_relevant_tooltip: 'To determine the most relevant documents, we use the relevance ranking provided by the source - either BASE or PubMed. Both sources compute the text similarity between your query and the article metadata to establish the relevance ranking. Please consult the FAQ for more information.',
            source_label: 'Source',
            resulttype_label: 'Document type',
            documenttypes_label: 'Document types',
            timestamp_label: 'Last updated',
            documenttypes_tooltip: 'The following document types were taken into consideration in the creation of this map (not all of them may appear in the map):',
            default_area: "No area",
            default_author: "",
            default_id: "defaultid",
            default_hash: "hashHash",
            default_abstract: "No Abstract",
            default_published_in: "",
            default_readers: 0,
            default_url: "",
            default_x: 1.,
            default_y: 1.,
            default_year: "",
            sort_by_label: 'sort by:',
            filter_by_label: 'show: ',
            all: "any",
            open_access: "Open Access",
            "Journal Article": "Journal article",
            Preprint: "Preprint",
            ReFigure: "ReFigure",
            Review: "Review",
            link: 'link',
            items: "items",
            comment_by_label: "by",
            pdf_not_loaded: "Sorry, we were not able to retrieve the PDF for this publication. You can get it directly from",
            pdf_not_loaded_linktext: "this website",
            share_button_title: "share this map",
            embed_button_title: "Embed this knowledge map on other websites",
            embed_button_text: 'Copy',
            embed_title: 'embed map',
            embed_body_text: 'You can use this code to embed the visualization on your own website or in a dashboard.',
        },
    }
};
