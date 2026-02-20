<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Knock Management</title>
        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/vegas.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/tooplate-barista.css" rel="stylesheet">

    <style>
        .sticky-social-sidebar {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            z-index: 9999;
            display: flex;
            flex-direction: column;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 20px;
            margin-bottom: 1px; /* Small gap between icons */
        }

        /* MCA Group-style colors */
        .facebook { background-color: #3b5998; }
        .twitter { background-color: #1da1f2; }
        .linkedin { background-color: #0077b5; }
        .email { background-color: #bc8d5f; } /* Matches Barista template brown */

        .social-icon:hover {
            width: 55px; /* Slight expansion on hover */
            padding-left: 10px;
            color: white;
            background-color: #333; /* Darkens on hover */
        }



        .custom-block-wrap {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .custom-block-wrap:hover {
            transform: translateY(-10px);
        }

        .custom-block-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .custom-block {
            padding: 25px;
            text-align: center;
        }

        .custom-block h4 {
            color: #bc8d5f; /* Template Gold/Brown */
            font-weight: 700;
        }



        #section_why_choose_us {
            background-color: #f9f9f9; /* Light grey background to separate from other sections */
        }

        .why-choose-item {
            padding: 30px 20px;
            background: #ffffff;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            height: 100%;
        }

        .why-choose-item:hover {
            border-bottom: 3px solid #bc8d5f; /* Accent color from template */
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .icon-box {
            font-size: 40px;
            color: #bc8d5f;
        }

        .why-choose-item h5 {
            font-weight: 700;
            margin-bottom: 15px;
            color: #333;
        }

        .why-choose-item p {
            font-size: 0.95rem;
            color: #666;
        }


        .process-card {
            position: relative;
            padding: 40px 20px;
            background: #fff;
            border: 1px solid #eee;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            z-index: 1;
        }

        .process-card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: #bc8d5f;
        }

        .process-number {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 40px;
            font-weight: 800;
            color: black;
            z-index: -1;
        }

        .process-icon {
            font-size: 35px;
            color: #bc8d5f;
            margin-bottom: 20px;
        }

        .process-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .process-card p {
            font-size: 0.9rem;
            color: #777;
            line-height: 1.6;
        }
        .mca-cleaning-process {
            background-color: #002d5b; /* MCA Navy Blue */
            padding: 50px 0;
            color: white;
            overflow: hidden;
        }
    </style>
</head>