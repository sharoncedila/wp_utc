<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 -> Things We Never Got Over
        DB::table('details')->insert([
            'book_id' => '1',
            'author' => "Lucy Score",
            'publisher' => "That's What She Said Publishing",
            'year' => '2022',
            'description' => "Bearded, bad-boy barber Knox prefers to live his life the way he takes his coffee: Alone. Unless you count his basset hound, Waylon. Knox doesn't tolerate drama, even when it comes in the form of a stranded runaway bride. Naomi wasn't just running away from her wedding. She was riding to the rescue of her estranged twin to Knockemout, Virginia, a rough-around-the-edges town where disputes are settled the old-fashioned way…with fists and beer. Usually in that order. Too bad for Naomi her evil twin hasn't changed at all. After helping herself to Naomi's car and cash, Tina leaves her with something unexpected. The niece Naomi didn't know she had. Now she’s stuck in town with no car, no job, no plan, and no home with an 11-year-old going on thirty to take care of. There's a reason Knox doesn't do complications or high-maintenance women, especially not the romantic ones. But since Naomi's life imploded right in front of him, the least he can do is help her out of her jam. And just as soon as she stops getting into new trouble he can leave her alone and get back to his peaceful, solitary life. At least, that's the plan until the trouble turns to real danger."
        ]);

        // 2 -> Where the Crawdads Sing
        DB::table('details')->insert([
            'book_id' => '2',
            'author' => "Delia Owens",
            'publisher' => "G.P. Putnam's Sons",
            'year' => '2018',
            'description' => "For years, rumors of the 'Marsh Girl' have haunted Barkley Cove, a quiet town on the North Carolina coast. So in late 1969, when handsome Chase Andrews is found dead, the locals immediately suspect Kya Clark, the so-called Marsh Girl. But Kya is not what they say. Sensitive and intelligent, she has survived for years alone in the marsh that she calls home, finding friends in the gulls and lessons in the sand. Then the time comes when she yearns to be touched and loved. When two young men from town become intrigued by her wild beauty, Kya opens herself to a new life—until the unthinkable happens. Where the Crawdads Sing is at once an exquisite ode to the natural world, a heartbreaking coming-of-age story, and a surprising tale of possible murder. Owens reminds us that we are forever shaped by the children we once were, and that we are all subject to the beautiful and violent secrets that nature keeps."
        ]);

        // 3 -> The Last Thing He Told Me
        DB::table('details')->insert([
            'book_id' => '3',
            'author' => "Laura Dave",
            'publisher' => "Simon & Schuster",
            'year' => '2021',
            'description' => "Before Owen Michaels disappears, he smuggles a note to his beloved wife of one year: Protect her. Despite her confusion and fear, Hannah Hall knows exactly to whom the note refers—Owen's sixteen-year-old daughter, Bailey. Bailey, who lost her mother tragically as a child. Bailey, who wants absolutely nothing to do with her new stepmother. As Hannah's increasingly desperate calls to Owen go unanswered, as the FBI arrests Owen's boss, as a US marshal and federal agents arrive at her Sausalito home unannounced, Hannah quickly realizes her husband isn't who he said he was. And that Bailey just may hold the key to figuring out Owen's true identity—and why he really disappeared. Hannah and Bailey set out to discover the truth. But as they start putting together the pieces of Owen's past, they soon realize they're also building a new future—one neither of them could have anticipated. With its breakneck pacing, dizzying plot twists, and evocative family drama, The Last Thing He Told Me is a riveting mystery, certain to shock you with its final, heartbreaking turn."
        ]);

        // 4 -> All Systems Red
        DB::table('details')->insert([
            'book_id' => '4',
            'author' => "Martha Wells",
            'publisher' => "Tom Doherty Associates",
            'year' => '2017',
            'description' => "In a corporate-dominated spacefaring future, planetary missions must be approved and supplied by the Company. Exploratory teams are accompanied by Company-supplied security androids, for their own safety. But in a society where contracts are awarded to the lowest bidder, safety isn't a primary concern. On a distant planet, a team of scientists are conducting surface tests, shadowed by their Company-supplied 'droid — a self-aware SecUnit that has hacked its own governor module, and refers to itself (though never out loud) as “Murderbot.” Scornful of humans, all it really wants is to be left alone long enough to figure out who it is. But when a neighboring mission goes dark, it's up to the scientists and their Murderbot to get to the truth."
        ]);

        // 5 -> Rogue Protocol
        DB::table('details')->insert([
            'book_id' => '5',
            'author' => "Martha Wells",
            'publisher' => "Tom Doherty Associates",
            'year' => '2018',
            'description' => "Rogue Protocol is the third entry in Martha Wells's Hugo, Nebula, Alex, and Locus Award-winning, New York Times and USA Today bestselling series, The Murderbot Diaries. Starring a human-like android who keeps getting sucked back into adventure after adventure, though it just wants to be left alone, away from humanity and small talk. Who knew being a heartless killing machine would present so many moral dilemmas? Sci-fi's favorite antisocial A.I. is back on a mission. The case against the too-big-to-fail GrayCris Corporation is floundering, and more importantly, authorities are beginning to ask more questions about where Dr. Mensah's SecUnit is. And Murderbot would rather those questions went away. For good."
        ]);

        // 6 -> Wish You Were Here
        DB::table('details')->insert([
            'book_id' => '6',
            'author' => "Jodi Picoult",
            'publisher' => "Ballantine Books",
            'year' => '2021',
            'description' => "Diana O'Toole is perfectly on track. She will be married by thirty, done having kids by thirty-five, and move out to the New York City suburbs, all while climbing the professional ladder in the cutthroat art auction world. She's an associate specialist at Sotheby's now, but her boss has hinted at a promotion if she can close a deal with a high-profile client. She's not engaged just yet, but she knows her boyfriend, Finn, a surgical resident, is about to propose on their romantic getaway to the Galápagos—days before her thirtieth birthday. Right on time. But then a virus that felt worlds away has appeared in the city, and on the eve of their departure, Finn breaks the news: It's all hands on deck at the hospital. He has to stay behind. You should still go, he assures her, since it would be a shame for all of their nonrefundable trip to go to waste. And so, reluctantly, she goes. Almost immediately, Diana's dream vacation goes awry. Her luggage is lost, the Wi-Fi is nearly nonexistent, and the hotel they'd booked is shut down due to the pandemic. In fact, the whole island is now under quarantine, and she is stranded until the borders reopen. Completely isolated, she must venture beyond her comfort zone. Slowly, she carves out a connection with a local family when a teenager with a secret opens up to Diana, despite her father's suspicion of outsiders.  In the Galápagos Islands, where Darwin's theory of evolution by natural selection was formed, Diana finds herself examining her relationships, her choices, and herself—and wondering if when she goes home, she too will have evolved into someone completely different."
        ]);

        // 7 -> A Brief History of Time
        DB::table('details')->insert([
            'book_id' => '7',
            'author' => "Stephen Hawking",
            'publisher' => "Bantam; 10th edition",
            'year' => '2011',
            'description' => "A landmark volume in science writing by one of the great minds of our time, Stephen Hawking's book explores such profound questions as: How did the universe begin—and what made its start possible? Does time always flow forward? Is the universe unending—or are there boundaries? Are there other dimensions in space? What will happen when it all ends? Told in language we all can understand, A Brief History of Time plunges into the exotic realms of black holes and quarks, of antimatter and “arrows of time,” of the big bang and a bigger God—where the possibilities are wondrous and unexpected. With exciting images and profound imagination, Stephen Hawking brings us closer to the ultimate secrets at the very heart of creation."
        ]);

        // 8 -> The Making of the Atomic Bomb
        DB::table('details')->insert([
            'book_id' => '8',
            'author' => "Richard Rhodes",
            'publisher' => "Simon & Schuster",
            'year' => '2012',
            'description' => "The definitive history of nuclear weapons and the Manhattan Project. From the turn-of-the-century discovery of nuclear energy to the dropping of the first bombs on Japan, Richard Rhodes's Pulitzer Prize-winning book details the science, the people, and the sociopolitical realities that led to the development of the atomic bomb. This sweeping account begins in the 19th century, with the discovery of nuclear fission, and continues to World War Two and the Americans' race to beat Hitler's Nazis. That competition launched the Manhattan Project and the nearly overnight construction of a vast military-industrial complex that culminated in the fateful dropping of the first bombs on Hiroshima and Nagasaki. Reading like a character-driven suspense novel, the book introduces the players in this saga of physics, politics, and human psychology—from FDR and Einstein to the visionary scientists who pioneered quantum theory and the application of thermonuclear fission, including Planck, Szilard, Bohr, Oppenheimer, Fermi, Teller, Meitner, von Neumann, and Lawrence. From nuclear power's earliest foreshadowing in the work of H.G. Wells to the bright glare of Trinity at Alamogordo and the arms race of the Cold War, this dread invention forever changed the course of human history, and The Making of The Atomic Bomb provides a panoramic backdrop for that story. Richard Rhodes's ability to craft compelling biographical portraits is matched only by his rigorous scholarship. Told in rich human, political, and scientific detail that any reader can follow, The Making of the Atomic Bomb is a thought-provoking and masterful work."
        ]);

        // 9 -> sickening
        DB::table('details')->insert([
            'book_id' => '9',
            'author' => "John Abramson",
            'publisher' => "Mariner Books",
            'year' => '2022',
            'description' => "The inside story of how Big Pharma's relentless pursuit of ever-higher profits corrupts medical knowledge—misleading doctors, misdirecting American health care, and harming our health. The United States spends an excess $1.5 trillion annually on health care compared to other wealthy countries—yet the amount of time that Americans live in good health ranks a lowly 68th in the world. At the heart of the problem is Big Pharma, which funds most clinical trials and therefore controls the research agenda, withholds the real data from those trials as corporate secrets, and shapes most of the information relied upon by health care professionals. In this no-holds-barred exposé, Dr. John Abramson—one of the foremost experts on the drug industry's deceptive tactics—combines patient stories with what he learned during many years of serving as an expert in national drug litigation to reveal the tangled web of financial interests at the heart of the dysfunction in our health-care system. For example, one of pharma's best-kept secrets is that the peer reviewers charged with ensuring the accuracy and completeness of the clinical trial reports published in medical journals do not even have access to complete data and must rely on manufacturer-influenced summaries. Likewise for the experts who write the clinical practice guidelines that define our standards of care. The result of years of research and privileged access to the inner workings of the U.S. medical-industrial complex, Sickening shines a light on the dark underbelly of American health care—and presents a path toward genuine reform."
        ]);

        // 10 -> Dopamine Nation: Finding Balance in the Age of Indulgence
        DB::table('details')->insert([
            'book_id' => '10',
            'author' => "Anna Lembke",
            'publisher' => "Dutton",
            'year' => '2021',
            'description' => "This book is about pleasure. It's also about pain. Most important, it's about how to find the delicate balance between the two, and why now more than ever finding balance is essential. We're living in a time of unprecedented access to high-reward, high-dopamine stimuli: drugs, food, news, gambling, shopping, gaming, texting, sexting, Facebooking, Instagramming, YouTubing, tweeting… The increased numbers, variety, and potency is staggering. The smartphone is the modern-day hypodermic needle, delivering digital dopamine 24/7 for a wired generation. As such we've all become vulnerable to compulsive overconsumption. In Dopamine Nation, Dr. Anna Lembke, psychiatrist and author, explores the exciting new scientific discoveries that explain why the relentless pursuit of pleasure leads to pain…and what to do about it. Condensing complex neuroscience into easy-to-understand metaphors, Lembke illustrates how finding contentment and connectedness means keeping dopamine in check. The lived experiences of her patients are the gripping fabric of her narrative. Their riveting stories of suffering and redemption give us all hope for managing our consumption and transforming our lives. In essence, Dopamine Nation shows that the secret to finding balance is combining the science of desire with the wisdom of recovery."
        ]);

        // 11 -> Behave: The Biology of Humans at Our Best and Worst
        DB::table('details')->insert([
            'book_id' => '11',
            'author' => "Robert M. Sapolsky",
            'publisher' => "Penguin Books",
            'year' => '2017',
            'description' => "Over a decade in the making, this game-changing book is Robert Sapolsky's genre-shattering attempt to answer that question as fully as perhaps only he could, looking at it from every angle. Sapolsky's storytelling concept is delightful but it also has a powerful intrinsic logic: he starts by looking at the factors that bear on a person's reaction in the precise moment a behavior occurs, and then hops back in time from there, in stages, ultimately ending up at the deep history of our species and its genetic inheritance. And so the first category of explanation is the neurobiological one. What goes on in a person's brain a second before the behavior happens? Then he pulls out to a slightly larger field of vision, a little earlier in time: What sight, sound, or smell triggers the nervous system to produce that behavior? And then, what hormones act hours to days earlier to change how responsive that individual is to the stimuli which trigger the nervous system? By now, he has increased our field of vision so that we are thinking about neurobiology and the sensory world of our environment and endocrinology in trying to explain what happened. Sapolsky keeps going--next to what features of the environment affected that person's brain, and then back to the childhood of the individual, and then to their genetic makeup. Finally, he expands the view to encompass factors larger than that one individual. How culture has shaped that individual's group, what ecological factors helped shape that culture, and on and on, back to evolutionary factors thousands and even millions of years old. The result is one of the most dazzling tours de horizon of the science of human behavior ever attempted, a majestic synthesis that harvests cutting-edge research across a range of disciplines to provide a subtle and nuanced perspective on why we ultimately do the things we do...for good and for ill. Sapolsky builds on this understanding to wrestle with some of our deepest and thorniest questions relating to tribalism and xenophobia, hierarchy and competition, morality and free will, and war and peace. Wise, humane, often very funny, Behave is a towering achievement, powerfully humanizing, and downright heroic in its own right."
        ]);

        // 12 -> Nursing Informatics and the Foundation of Knowledge
        DB::table('details')->insert([
            'book_id' => '12',
            'author' => "Dee McGonigle, Kathleen Mastrian",
            'publisher' => "Jones & Bartlett Learning",
            'year' => '2021',
            'description' => "Nursing Informatics and the Foundation of Knowledge, Fifth Edition is a foundational text for teaching nursing students the core concepts of knowledge management while providing an understanding of the current technological tools and resources available."
        ]);

        // 13 -> AI 2041: Ten Visions for Our Future
        DB::table('details')->insert([
            'book_id' => '13',
            'author' => "Kai-Fu-Lee",
            'publisher' => "Currency ",
            'year' => '2021',
            'description' => "AI will be the defining development of the twenty-first century. Within two decades, aspects of daily human life will be unrecognizable. AI will generate unprecedented wealth, revolutionize medicine and education through human-machine symbiosis, and create brand-new forms of communication and entertainment. In liberating us from routine work, however, AI will also challenge the organizing principles of our economic and social order. Meanwhile, AI will bring new risks in the form of autonomous weapons and smart technology that inherits human bias. AI is at a tipping point, and people need to wake up—both to AI's radiant pathways and its existential perils for life as we know it. In this provocative, utterly original work, Kai-Fu Lee, the former president of Google China and bestselling author of AI Superpowers, teams up with celebrated novelist Chen Qiufan to imagine our world in 2041 and how it will be shaped by AI. In ten gripping short stories, they introduce readers to an array of eye-opening 2041 settings, such as: In San Francisco, the “job reallocation” industry emerges as deep learning AI causes widespread job displacement, In Tokyo, a music fan is swept up in an immersive form of celebrity worship based on virtual reality and mixed reality, In Mumbai, a teenage girl rebels when AI's crunching of big data gets in the way of romance, In Seoul, virtual companions with perfected natural language processing (NLP) skills offer orphaned twins new ways to connect, In Munich, a rogue scientist draws on quantum computing, computer vision and other AI technologies in a revenge plot that imperils the world. By gazing toward a not-so-distant horizon, AI 2041 offers urgent insights into our collective future—while reminding readers that, ultimately, humankind remains the author of its destiny."
        ]);

        // 14 -> Data Mesh
        DB::table('details')->insert([
            'book_id' => '14',
            'author' => "Zhamak Dehghani",
            'publisher' => "O'Reilly Media",
            'year' => '2022',
            'description' => "We're at an inflection point in data, where our data management solutions no longer match the complexity of organizations, the proliferation of data sources, and the scope of our aspirations to get value from data with AI and analytics. In this practical book, author Zhamak Dehghani introduces data mesh, a decentralized sociotechnical paradigm drawn from modern distributed architecture that provides a new approach to sourcing, sharing, accessing, and managing analytical data at scale. Dehghani guides practitioners, architects, technical leaders, and decision makers on their journey from traditional big data architecture to a distributed and multidimensional approach to analytical data management. Data mesh treats data as a product, considers domains as a primary concern, applies platform thinking to create self-serve data infrastructure, and introduces a federated computational model of data governance."
        ]);

        // 15 -> Learning Domain-Driven Design
        DB::table('details')->insert([
            'book_id' => '15',
            'author' => "Vlad Khononov",
            'publisher' => "O'Reilly Media",
            'year' => '2021',
            'description' => "Building software is harder than ever. As a developer, you not only have to chase ever-changing technological trends but also need to understand the business domains behind the software. This practical book provides you with a set of core patterns, principles, and practices for analyzing business domains, understanding business strategy, and, most importantly, aligning software design with its business needs. Author Vlad Khononov shows you how these practices lead to robust implementation of business logic and help to future-proof software design and architecture. You'll examine the relationship between domain-driven design (DDD) and other methodologies to ensure you make architectural decisions that meet business requirements. You'll also explore the real-life story of implementing DDD in a startup company."
        ]);

        // 16 -> Machines like Us: Toward AI with Common Sense
        DB::table('details')->insert([
            'book_id' => '16',
            'author' => "Ronald J. Brachman",
            'publisher' => "The MIT Press",
            'year' => '2022',
            'description' => "It's sometime in the not-so-distant future, and you send your fully autonomous self-driving car to the store to pick up your grocery order. The car is endowed with as much capability as an artificial intelligence agent can have, programmed to drive better than you do. But when the car encounters a traffic light stuck on red, it just sits there—indefinitely. Its obstacle-avoidance, lane-following, and route-calculation capacities are all irrelevant; it fails to act because it lacks the common sense of a human driver, who would quickly figure out what's happening and find a workaround. In Machines like Us, Ron Brachman and Hector Levesque—both leading experts in AI—consider what it would take to create machines with common sense rather than just the specialized expertise of today's AI systems. Using the stuck traffic light and other relatable examples, Brachman and Levesque offer an accessible account of how common sense might be built into a machine. They analyze common sense in humans, explain how AI over the years has focused mainly on expertise, and suggest ways to endow an AI system with both common sense and effective reasoning. Finally, they consider the critical issue of how we can trust an autonomous machine to make decisions, identifying two fundamental requirements for trustworthy autonomous AI systems: having reasons for doing what they do, and being able to accept advice. Both in the end are dependent on having common sense."
        ]);

        // 17 -> Deep Learning for Vision Systems
        DB::table('details')->insert([
            'book_id' => '17',
            'author' => "Mohamed Elgendy",
            'publisher' => "Manning",
            'year' => '2020',
            'description' => "How does the computer learn to understand what it sees? Deep Learning for Vision Systems answers that by applying deep learning to computer vision. Using only high school algebra, this book illuminates the concepts behind visual intuition. You'll understand how to use deep learning architectures to build vision system applications for image generation and facial recognition."
        ]);

        // 18 -> Small Signal Audio Design
        DB::table('details')->insert([
            'book_id' => '18',
            'author' => "Douglas Self",
            'publisher' => "Focal Press",
            'year' => '2020',
            'description' => "Small Signal Audio Design is a highly practical handbook providing an extensive repertoire of circuits that can be assembled to make almost any type of audio system. The publication of Electronics for Vinyl has freed up space for new material, (though this book still contains a lot on moving-magnet and moving-coil electronics) and this fully revised third edition offers wholly new chapters on tape machines, guitar electronics, and variable-gain amplifiers, plus much more. A major theme is the use of inexpensive and readily available parts to obtain state-of-the-art performance for noise, distortion, crosstalk, frequency response accuracy and other parameters. Virtually every page reveals nuggets of specialized knowledge not found anywhere else. For example, you can improve the offness of a fader simply by adding a resistor in the right place- if you know the right place. Essential points of theory that bear on practical audio performance are lucidly and thoroughly explained, with the mathematics kept to an absolute minimum. Self's background in design for manufacture ensures he keeps a wary eye on the cost of things. This book features the engaging prose style familiar to readers of his other books. You will learn why mercury-filled cables are not a good idea, the pitfalls of plating gold on copper, and what quotes from Star Trek have to do with PCB design."
        ]);

        // 19 -> Spelunking Through Hell
        DB::table('details')->insert([
            'book_id' => '19',
            'author' => "Seanan McGuire",
            'publisher' => "Penguin Random House",
            'year' => '2022',
            'description' => "It's been fifty years since the crossroads caused the disappearance of Thomas Price, and his wife, Alice, has been trying to find him and bring him home ever since, despite the increasing probability that he's no longer alive for her to find.  Now that the crossroads have been destroyed, she's redoubling her efforts.  It's time to bring him home, dead or alive. Preferably alive, of course, but she's tired, and at this point, she's not that picky.  It's a pan-dimensional crash course in chaos, as Alice tries to find the rabbit hole she's been missing for all these decades—the one that will take her to the man she loves. Who are her allies?  Who are her enemies?  And if she manages to find him, will he even remember her at this point?"
        ]);

        // 20 -> A Game of Thrones
        DB::table('details')->insert([
            'book_id' => '20',
            'author' => "George R. R. Martin",
            'publisher' => "Random House Publishing Group",
            'year' => '2003',
            'description' => "Winter is coming. Such is the stern motto of House Stark, the northernmost of the fiefdoms that owe allegiance to King Robert Baratheon in far-off King's Landing. There Eddard Stark of Winterfell rules in Robert's name. There his family dwells in peace and comfort: his proud wife, Catelyn; his sons Robb, Brandon, and Rickon; his daughters Sansa and Arya; and his bastard son, Jon Snow. Far to the north, behind the towering Wall, lie savage Wildings and worse—unnatural things relegated to myth during the centuries-long summer, but proving all too real and all too deadly in the turning of the season. Yet a more immediate threat lurks to the south, where Jon Arryn, the Hand of the King, has died under mysterious circumstances. Now Robert is riding north to Winterfell, bringing his queen, the lovely but cold Cersei, his son, the cruel, vainglorious Prince Joffrey, and the queen's brothers Jaime and Tyrion of the powerful and wealthy House Lannister—the first a swordsman without equal, the second a dwarf whose stunted stature belies a brilliant mind. All are heading for Winterfell and a fateful encounter that will change the course of kingdoms Meanwhile, across the Narrow Sea, Prince Viserys, heir of the fallen House Targaryen, which once ruled all of Westeros, schemes to reclaim the throne with an army of barbarian Dothraki—whose loyalty he will purchase in the only coin left to him: his beautiful yet innocent sister, Daenerys."
        ]);

        // 21 -> The Great Hunt
        DB::table('details')->insert([
            'book_id' => '21',
            'author' => "Robert Jordan",
            'publisher' => "Tom Doherty Associates",
            'year' => '2009',
            'description' => "For centuries, gleemen have told the tales of The Great Hunt of the Horn. So many tales about each of the Hunters, and so many Hunters to tell of... Now the Horn itself is found: the Horn of Valere long thought only legend, the Horn which will raise the dead heroes of the ages. And it is stolen. In pursuit of the thieves, Rand al'Thor is determined to keep the Horn out of the grasp of The Dark One. But he has also learned that he is The Dragon Reborn—the Champion of Light destined to stand against the Shadow time and again. It is a duty and a destiny that requires Rand to uncover and master magical capabilities he never imagined he possessed. Since its debut in 1990, The Wheel of Time® has captivated millions of readers around the globe with its scope, originality, and compelling characters. The last six books in series were all instant #1 New York Times bestsellers, and The Eye of the World was named one of America's best-loved novels by PBS's The Great American Read."
        ]);

        // 22 -> The Dragon Reborn
        DB::table('details')->insert([
            'book_id' => '22',
            'author' => "Robert Jordan",
            'publisher' => "Tom Doherty Associates",
            'year' => '2002',
            'description' => "Winter has stopped the war—almost—yet men are dying, calling out for the Dragon. But where is he? Rand al'Thor has been proclaimed the Dragon Reborn. Traveling to the great fortress known as the Stone of Tear, he plans to find the sword Callandor, which can only be wielded by the Champion of Light, and discover if he truly is destined to battle The Dark One. Following Rand, Moiraine and their friends battle Darkhounds on the hunt, hoping they reach the Heart of the Stone in time for the next great test awaiting the Dragon Reborn. Since its debut in 1990, The Wheel of Time® by Robert Jordan has captivated millions of readers around the globe with its scope, originality, and compelling characters. The last six books in series were all instant #1 New York Times bestsellers, and The Eye of the World was named one of America's best-loved novels by PBS's The Great American Read."
        ]);

        // 23 -> The Way of Kings
        DB::table('details')->insert([
            'book_id' => '23',
            'author' => "Brandon Sanderson",
            'publisher' => "Tom Doherty Associates",
            'year' => '2010',
            'description' => "Roshar is a world of stone and storms. Uncanny tempests of incredible power sweep across the rocky terrain so frequently that they have shaped ecology and civilization alike. Animals hide in shells, trees pull in branches, and grass retracts into the soilless ground. Cities are built only where the topography offers shelter. It has been centuries since the fall of the ten consecrated orders known as the Knights Radiant, but their Shardblades and Shardplate remain: mystical swords and suits of armor that transform ordinary men into near-invincible warriors. Men trade kingdoms for Shardblades. Wars were fought for them, and won by them. One such war rages on a ruined landscape called the Shattered Plains. There, Kaladin, who traded his medical apprenticeship for a spear to protect his little brother, has been reduced to slavery. In a war that makes no sense, where ten armies fight separately against a single foe, he struggles to save his men and to fathom the leaders who consider them expendable. Brightlord Dalinar Kholin commands one of those other armies. Like his brother, the late king, he is fascinated by an ancient text called The Way of Kings. Troubled by over-powering visions of ancient times and the Knights Radiant, he has begun to doubt his own sanity. Across the ocean, an untried young woman named Shallan seeks to train under an eminent scholar and notorious heretic, Dalinar's niece, Jasnah. Though she genuinely loves learning, Shallan's motives are less than pure. As she plans a daring theft, her research for Jasnah hints at secrets of the Knights Radiant and the true cause of the war. The result of over ten years of planning, writing, and world-building, The Way of Kings is but the opening movement of the Stormlight Archive, a bold masterpiece in the making."
        ]);

        // 24 -> The Awakening
        DB::table('details')->insert([
            'book_id' => '24',
            'author' => "Nora Roberts",
            'publisher' => "St. Martin's Publishing Group",
            'year' => '2020',
            'description' => "In the realm of Talamh, a teenage warrior named Keegan emerges from a lake holding a sword—representing both power and the terrifying responsibility to protect the Fey. In another realm known as Philadelphia, a young woman has just discovered she possesses a treasure of her own. When Breen Kelly was a girl, her father would tell her stories of magical places. Now she's an anxious twentysomething mired in student debt and working a job she hates. But one day she stumbles upon a shocking discovery: her mother has been hiding an investment account in her name. It has been funded by her long-lost father—and it's worth nearly four million dollars. This newfound fortune would be life-changing for anyone. But little does Breen know that when she uses some of the money to journey to Ireland, it will unlock mysteries she couldn't have imagined. Here, she will begin to understand why she kept seeing that silver-haired, elusive man, why she imagined his voice in her head saying Come home, Breen Siobhan. It's time you came home. Why she dreamed of dragons. And where her true destiny lies—through a portal in Galway that takes her to a land of faeries and mermaids, to a man named Keegan, and to the courage in her own heart that will guide her through a powerful, dangerous destiny."
        ]);
    }
}
