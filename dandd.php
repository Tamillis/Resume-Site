<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "templates/meta-data.html" ?>

  <title>D&D</title>

  <!-- React with JSX -->
  <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin defer></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin defer></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js" defer></script>

</head>

<body>

  <?php include "templates/sidebar.html" ?>

  <button class="nav-btn" id="nav-btn" onClick="toggleNav()">&#9776;</button>

  <div id="not-sidebar">
    <section class="section bg-black-transparent-0p3">
      <!-- Taken from the Joplin document, manually for now -->
      <!-- One day I'll automate that process, cause it should be relatively easy -->
      <h1 class="main-title">Dungeons & Dragons At My Table</h1>
      <h2 class="subtitle">Introduction</h2>
      <div class="quote">“Make your choices wisely, apprentice, for you will find they come to define you.”</div>
      <div class="quote-source">– Unknown</div>

      <div class="main-text intro-text">
        <p>I run D&amp;D pretty much everywhere I go, as it&#39;s one of my favourite and deepest passions. A table-top
          roleplaying game is unlike anything else, a piece of live theatre, boardgame, and creative co-operative story
          telling all in one. I never can find the words to describe it properly.
        </p>

        <p>I&#39;ve been running it for over 10 years since I was 16, and by far the most popular system at my tables has
          been Dungeons and Dragons 5th Edition. My grandest of world building projects, also visible on this site, is my
          go
          to setting for it, and itself was built around the assumed setting that D&amp;D functions around.</p>
        <p>For players in my games, this page is a starting point of any campaign for them to dig into the slight changes
          I
          often use, and for any visitors I hope it can give you ideas and perhaps even introduce you to some new and
          exciting content. While I use the base game mostly as is, I have this following collection of homebrew that I
          have
          curated from the internet or on occasion come up with myself.
        </p>
      </div>

      <h2 id="master-player-brief" class="subtitle">Master Player Brief</h2>
      <div class="main-text">
        <p>This is the master brief, the default applicable rules I run on top of D&amp;D 5th Edition, regardless of
          setting. Some setting specific modifications may be made, and I would tell you about those.
        </p>
      </div>

      <h3 id="official-material-i-run" class="subsubtitle">Official Material I run:</h3>
      <div class="main-text">
        <p>All D&amp;D 5e official WoTC printed books, including those that come out in the future (PHB, SCAG,
          Xanathar&#39;s, etc). I run Unearthed Arcana material on an open trial basis, where I retain the right to modify
          or remove UA material if it becomes an issue. With regards to the Class Variant Features UA the ‘Spell
          Versatility’ features are not allowed, as they break my in-universe laws of magic. UA that is considered
          retired,
          such as those since the release of Tasha’s, I don’t allow by default (though as usual you can ask).
        </p>
        <p>If there&#39;s something from 3rd Party, or Homebrew you desperately want please run it by me first. I&#39;m
          not
          just going to say no.
        </p>
      </div>

      <h3 id="homebrew-i-run-" class="subsubtitle">Homebrew I run:</h3>
      <div class="main-text">
        <p>The following collection of vetted-by-me homebrew (subject to oversight and at-the-table balancing). The only
          homebrew that replaces default rules is Weapons Revised, which provides a more balanced, nuanced and slight
          power
          up to weapons and weapon users, so please at least skim it. It is marked with an asterisk *.
        </p>

        <p>The compendiums are high-quality compilations of whole swathes of options in the style of Xanathar’s, and I do
          recommend taking a peek if you want to try something new or are looking for novel character ideas. I also would
          love to playtest them, so there’s that too. </p>

        <p><span class="inline-subtitle">Aaralyn’s Stolen Notes to Velea</span> (compendium of options) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmC1uFZCTIzL_qRKR" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmC1uFZCTIzL_qRKR</a>
        </p>
        <p><span class="inline-subtitle">Backgrounds Omnibus</span> (compendium of additional backgrounds) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmmPGIbAlsCFavnjS" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmmPGIbAlsCFavnjS</a>
        </p>
        <p><span class="inline-subtitle">Balasar’s Guide</span> (compendium of options) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmBi8yUfLT_OGynmC" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmBi8yUfLT_OGynmC</a>
        </p>
        <p><span class="inline-subtitle">Dark Arts Player’s Companion</span> (compendium of edgy options) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmmw7vzaEhQ2kxHfc" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmmw7vzaEhQ2kxHfc</a>
        </p>
        <p><span class="inline-subtitle">Matt Mercer’s Gunslinger</span> (Fighter subclass) – <a class="intext-link" href="https://www.dndbeyond.com/subclasses/gunslinger" target="_blank">https://www.dndbeyond.com/subclasses/gunslinger</a>
          however the reload and misfire rules follow those detailed in Armouries of the Second Empire (see below) </p>
        <p><span class="inline-subtitle">Matt Mercer’s Blood Hunter</span> (class) – <a class="intext-link" href="https://www.dndbeyond.com/classes/blood-hunter" target="_blank">https://www.dndbeyond.com/classes/blood-hunter</a> </p>
        <p><span class="inline-subtitle">Philosopher</span> (class) – <a class="intext-link" href="https://drive.google.com/file/d/0B4wSsNjnH-qRQWlMYU1RZGdYdjg/view?usp=sharing" target="_blank">https://drive.google.com/file/d/0B4wSsNjnH-qRQWlMYU1RZGdYdjg/view?usp=sharing</a>
        </p>
        <p><span class="inline-subtitle">Revised Artificer</span> (Artificer rework) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmy2oWd_sBThR-6zm" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmy2oWd_sBThR-6zm</a>
        </p>
        <p><span class="inline-subtitle">Soul Binder</span> (class) – <a class="intext-link" href="https://www.gmbinder.com/share/-LY7agXq01TYt_qG2nUb" target="_blank">https://www.gmbinder.com/share/-LY7agXq01TYt_qG2nUb</a>
        </p>
        <p><span class="inline-subtitle">Wardrow’s Feat Compendium</span> (feat collection) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmyby6lbZfMBsBkBe" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmyby6lbZfMBsBkBe</a>
        </p>
        <p><span class="inline-subtitle">White Necromancer</span> (wizard subclass) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLnUmLIu5avGpHTRTq?e=9niWkN" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLnUmLIu5avGpHTRTq?e=9niWkN</a>
        </p>
        <p><span class="inline-subtitle">Weapon’s Revised*</span> (rules expansion) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLmmrdNLmMeUrxi5kM" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLmmrdNLmMeUrxi5kM</a>
        </p>
        <p><span class="inline-subtitle">Witch</span> (class) – <a class="intext-link" href="https://1drv.ms/b/s!Aq2B34oritBLo35wW2BENyEExLAI?e=yKOCnW" target="_blank">https://1drv.ms/b/s!Aq2B34oritBLo35wW2BENyEExLAI?e=yKOCnW</a>
        </p>
      </div>

      <h3 id="personal-homebrew" class="subsubtitle">Personal Homebrew</h3>
      <div class="main-text">
        <p><span class="inline-subtitle">Armouries of the Second Empire</span> – should we be playing in the Age of Man
          setting, or something similar, the
          following are a list of firearms, firearms rules, and items from the Second Empire; </p>
        <p><a class="intext-link" href="https://1drv.ms/w/s!Aq2B34oritBLnj8-HQVw6hqZGfYc?e=YTcIEA" target="_blank">https://1drv.ms/w/s!Aq2B34oritBLnj8-HQVw6hqZGfYc?e=YTcIEA</a>
        </p>
        <p><span class="inline-subtitle">Dryad Prestige Class</span> – it is a work in progress, but needs testing to find
          the feel of it. Characters who have
          had their soul bonded to a tree by a powerful fey start to become dryads, and as they indulge in their new
          nature, they grow into the powers described within. This is a &quot;Prestige Class&quot; that only goes up to
          level 10 and is intended to be taken through multiclassing. You may take dryad as your first level, perhaps that
          is indeed how your adventuring career started. </p>
        <p><a class="intext-link" href="https://1drv.ms/w/s!Aq2B34oritBLmwCCFfCDkprcPJr6?e=EtBUdW" target="_blank">https://1drv.ms/w/s!Aq2B34oritBLmwCCFfCDkprcPJr6?e=EtBUdW</a>
        </p>
        <p><span class="inline-subtitle">Prestigious D&amp;D</span> – a homebrew document that details a module of rules
          to do with expanding class features into becoming feats which can be swapped out and introduces limits to pure
          class levels. The Level Cap and Secondary Swap-out rules are determined by the campaign, so please ask. Find it
          here; </p>
        <p><a class="intext-link" href="https://1drv.ms/w/s!Aq2B34oritBLkVXKUDJP9LuwzgIY" target="_blank">https://1drv.ms/w/s!Aq2B34oritBLkVXKUDJP9LuwzgIY</a>
        </p>
      </div>

      <h3 id="personal-homebrew-rules" class="subsubtitle">Personal Homebrew Rules</h3>
      <div class="main-text">
        <p>We will be playing with all the optional rules we all take for granted, like feats, background variants,
          multiclassing and flanking. In addition, we will play with my personal homebrew rules, a list of small rules
          tweaks and additions. Rules marked with an asterisk * are important to normal character creation;
        </p>
        <p><span class="inline-subtitle">Accessing Bags and Items</span> – accessing any bags, packs, or items not stored
          in purposefully easily accessible
          locations, such as a purpose-built pocket, a bandoleer, a holster, or a sheath (or so on), is an action, as you
          take off a bag, rummage around in it, withdraw the item, and put the bag back on (or equivalent). Such items, in
          particular potions of healing, do not fit in normal pockets, though certain custom-made holsters may do the
          trick. Accessing any items in purposefully easily accessible locations like this is instead a bonus action.
        </p>
        <p>The act of consuming or administering any potion/poison/etc., like normal drinking, is considered part of the
          action / bonus action. Items that are used as an action, such as a medical kit or trap, are not accessed as part
          of their use action, so be prepared.
        </p>
        <p><span class="inline-subtitle">Background Feat &amp; Normal+ Humans*</span> – you pick one feat at character creation, as if you have a character level of 1 (but otherwise classless), in addition to normal character creation. However, this feat must be related to your background, such as Skulker for the Criminal background. This can be any available feat as allowed by the core or expanded rules, such as Prestigious D&amp;D&#39;s Secondary Swap out. Because of this, the variant human is not available. Instead you&#39;re a &quot;Normal Human+&quot;, using the non-variant human plus an additional Skill Proficiency of your choice and an additional Tool Proficiency of your choice.
        </p>
        <p><span class="inline-subtitle">Cultural Languages* </span>– There are no racial languages, but cultural
          languages in their stead, such as Imperial
          Common. Characters grow up speaking their culture&#39;s language, and the setting’s Common if their home culture
          is not that. Additional ‘racial’ languages are instead additional cultural languages. Knowledge of language
          comes
          from culture and nurture, not from blood. That said, exotic languages (such as draconic) are considered an
          aspect
          of magic, and (like normal) may not be taken as a ‘racial’ language without DM consent. See the
          &#39;Languages&#39; section of the setting for details and the various cultural languages.
        </p>
        <p><span class="inline-subtitle">Flanking, battlemat </span>– almost as described in the Player Handbook, whenever
          a friendly creature is on the
          opposite
          side of an enemy (I.e. a line can be drawn between you two bisecting the enemy through opposite sides or
          corners),
          both friendly creatures have advantage to attack that enemy. However, flanking cannot be earned on creatures two
          or more sizes larger than you.
        </p>
        <p><span class="inline-subtitle">Flanking, theatre of the mind </span>– when engaging a creature in melee you are
          said to be ‘facing’ that creature.
          When attacking a creature in melee who is not facing you, you gain advantage due to flanking. Creatures not
          already
          engaged automatically ‘face’ the incoming attacker. At the end of the turn creatures declare who they face until
          the start of their next turn, if not immediately obvious. Players with the Extra Attack feature and creatures
          with Multi-attack can face a number of creatures at once equal to their total number of attacks (effectively
          requiring a number of attackers equal to their attacks for an additional attacker to gain advantage from
          flanking).
          Creatures two or more sizes smaller do not impose flanking.
        </p>
        <p><span class="inline-subtitle">Hitting Cover</span> – Ranged attacks against creatures in cover hit the cover if
          the player rolls the cover value or below on the dice (so 2/1 for half cover and 5 or below in three quarter
          cover). Creatures in 5ft with creatures of their size or larger are treated as being in half cover (+2 bonus to
          AC) by their enemy, meaning creatures in melee provide cover for each other. Creatures in 5ft with creatures two
          sizes larger are in three-quarters cover (+5 bonus to AC). Don’t shoot your allies now!
        </p>
        <p><span class="inline-subtitle">Improved Standard Array </span>– we will be using my version of the standard
          array. I find the original a little
          underwhelming for Heroic Adventuring, and also poorly balanced between odd and even values. So, we will use;
          16, 14, 13, 11, 10, 9
          This array also modifies the total points for those using Point Buy to 30. Feel free to use the calculator below
          to help you out if using Point Buy instead.
        </p>
        <p><span class="inline-subtitle">Injury Risk </span>– when a character goes unconscious in a fight, next to their
          death saves, they tally a mark, an
          &quot;injury risk&quot;. At the end of the fight characters that have injury risks make a constitution saving
          throw vs a DC equal to the number of risks x5 (so one risk is a DC 5, two risks DC 10, etc.) and erase the
          marks.
          If they fail, their temporary harms develop into a permanent injury, and they roll on the injury table found on
          page 272 of the DMG, otherwise the risk abates and they suffered only temporary wounds. Depending on the injury,
          the DM in collaboration with the players may adjudicate a different permanent injury.
        </p>
        <p><span class="inline-subtitle">Skill Per Intelligence*</span> – intelligence is one of the weakest statistics
          mechanically, leading many to take it as a dump statistic and shoe-horning their character to be played as a dumbass (though sometimes this can be fun, no mistake, it should be a choice not a compromise). In an attempt to reconnect Intelligence to Skills, their old
          domain, and boost its worth; when creating a character, you select a number of skills from your class’ skill
          list equal to 2 + your Intelligence modifier (to a total minimum of 0), not the number stated.
        </p>
        <p>In the unlikely situation where high level rogues or bards find themselves with more expertise than skills, they can instead take a skill proficiency.
        </p>
        <p><span class="inline-subtitle">Sprinting &amp; Chasing</span> – you can spend your movement, action and bonus
          action (your entire “turn”) to move 5 times your speed in a straight line, provoking opportunity attacks as normal. Movement in 5e is “combat
          movement”, a sort of situationally aware movement, which is why when you run the numbers it seems slow. This
          sprint, then, is an all-out reckless sprint.
        </p>
        <p>Meanwhile, chases and chasing another creature is a skill challenge and is not invalidated by the speed value
          of one creature being greater than another’s. Large speed differences can grant advantages/disadvantages to
          certain rolls depending on how the player has their character interact with the chase, but otherwise a
          characters in combat &quot;Movement&quot; value doesn&#39;t affect chases.
        </p>
        <p><span class="inline-subtitle">Unstable Platform </span>– when shooting from an unstable platform, such as
          quicksand, the back of a moving mount
          (horse, broomstick etc) or when actively flying (i.e. not with the fly or levitate spells, or similar), you make
          ranged weapon attacks and ranged spell attacks that have somatic components with disadvantage. This rule creates
          the feat “Mounted Archery”. See the Materium Existantiae Core Setting document for details. </p>
        <br>
        <p>*With your 1st level feat you could choose to take as your feat (instead of from the normal and expanded feat
          lists) one of the secondary features listed below from the other classes which you qualify for (as per the
          Prestigious D&amp;D rules);
        </p>

        <table class="table">
          <tr>
            <th>Class</th>
            <th>Feature</th>
            <th>Prerequisites</th>
          </tr>
          <tr>
            <td>Barbarian</td>
            <td>Unarmored Defense (Barbarian)</td>
            <td>Strength 13</td>
          </tr>
          <tr>
            <td>Fighter</td>
            <td>Fighting Style</td>
            <td>Strength 13 or Dexterity 13</td>
          </tr>
          <tr>
            <td>Fighter</td>
            <td>Second Wind</td>
            <td>Strength 13 or Dexterity 13</td>
          </tr>
          <tr>
            <td>Monk</td>
            <td>Unarmored Defense (Monk)</td>
            <td>Dexterity 13 and Wisdom 13</td>
          </tr>
          <tr>
            <td>Paladin</td>
            <td>Divine Sense</td>
            <td>Strength 13 and Charisma 13, prof. in Religion</td>
          </tr>
          <tr>
            <td>Paladin</td>
            <td>Lay on Hands</td>
            <td>Strength 13 and Charisma 13, prof. in Religion</td>
          </tr>
          <tr>
            <td>Revised Ranger</td>
            <td>Favored Enemy</td>
            <td>Dexterity 13 and Wisdom 13</td>
          </tr>
          <tr>
            <td>Rogue</td>
            <td>Expertise I</td>
            <td>Dexterity 13</td>
          </tr>
          <tr>
            <td>Rogue</td>
            <td>Thieves Cant</td>
            <td>Dexterity 13</td>
          </tr>
          <tr>
            <td>Wizard</td>
            <td>Arcane Recovery</td>
            <td>Intelligence 13</td>
          </tr>
        </table>
      </div>

      <hr class="rule">

      <div id="PBCalc"></div>

      <script type="text/babel">
        //TODO: make CSS and classNames

      const PointBuyCalculatorApp = () => {
        //calculator level state data, first
        const [data, setData] = React.useState({
          Strength: 10,
          Dexterity: 10,
          Constitution: 10,
          Intelligence: 10,
          Wisdom: 10,
          Charisma: 10,
        });

        //global constant, taken from D&D 5e
        const POINTMAX = 30;

        //calc current point total
        let currPointTotal = 0;
        //by summing over all the values and adding them up using an inline arrow function and the forEach array function being called 
        //from the values array generated by the Object.values() prototype function.
        Object.values(data).forEach(val => { currPointTotal += getPointsValue(val); });

        function getPointsValue(attributeValue) {
          //get the points value for given attribute value using this array taken from my own rules
          const mappingArray = [-1, 0, 1, 2, 3, 4, 5, 7, 9, 12];

          //assign points value via index, which is 7 less than the corresponding attribute
          return mappingArray[attributeValue - 7];
        }

        const updateAttribute = (attribute, valueChange) => {
          //check the data isn't making the attributes illegal values
          if (data[attribute] + valueChange > 16 || data[attribute] + valueChange < 7) return;
          //check change doesnt violate max point cost if so return out

          //create a copy of the data using the spread operator
          const newData = { ...data };
          //directly modify that copied data, as thats ok

          //using bracket notation to access the property key thats passed in
          newData[attribute] += Number(valueChange);

          //compare currPointTotal with new hypothetical total
          let newPointTotal = 0;
          //by summing over all the values and adding them up using an inline arrow function and the forEach array function being called 
          //from the values array generated by the Object.values() prototype function. I think I'm finally learning JavaScript
          Object.values(newData).forEach(value => { newPointTotal += getPointsValue(value); });
          //and return escape if over POINTMAX
          if (newPointTotal > POINTMAX) return;

          //and call the hook. et voila
          setData(newData);
        }

        function Statbloc(props) {
          return (
            <div className="statbloc-container">
              <p className="statbloc-items statbloc-label">{props.attribute}: {props.value} ({(Math.floor((props.value - 10) / 2)) >= 0 && "+"}{Math.floor((props.value - 10) / 2)})</p>
              <div>
                <button className="statbloc-items btn statbloc-btn" type="number" onClick={() => props.onClick(props.attribute, 1)}>+</button>
                <button className="statbloc-items btn statbloc-btn" type="number" onClick={() => props.onClick(props.attribute, -1)}>-</button>
              </div>
            </div>
            )
        }

        //create array of appropriate statbloc components
        let stats = [];
        let keys = Object.keys(data);
        for (let i = 0; i < keys.length; i++) {
          stats.push(<Statbloc key={i} attribute={keys[i]} value={data[keys[i]]} onClick={updateAttribute} />)
        }

        return (<div className="app-body">
          <h3 className="subtitle">My Point Buy Calculator</h3>

          <p className="main-text subtitle-synopsis">
            <span className="inline-subtitle">[[This calculator is built using React!]]</span><br />
            Calculate the points cost of your attributes, following the standard set by my Improved Standard Array above, not the base D&D5e rules. You cannot go above 16 or below 7 per attribute, and your point total cannot exceed 30. See the table to follow how much each attribute value costs.
          </p>
          <div className="app-main">
            <div className="calculator-body">
              <p className="main-text inline-subtitle underline">{"Points: " + currPointTotal + " / " + POINTMAX}</p>
              <div className="statblocs-container">{stats}</div>
            </div>
            <table className="table app-table">
              <tbody>
                <tr>
                  <th>Attribute Value</th>
                  <th>Point Cost</th>
                </tr>
                <tr>
                  <td>16</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>-1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        )
      }

      ReactDOM.render(<PointBuyCalculatorApp />, document.getElementById("PBCalc"));

    </script>

    </section>

    <footer id="footer" class="main-footer">
      <label class="footer-text align-right" for="demo-div">This site demos: </label>
      <div id="demo-div">
        <img src="assets/icons8-code-file-50.png" width="32" height="32" style="border-radius:5px;" title="Static HTML">
        <svg version="1.1" id="Layer_2_1_" width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 841.9 595.3" enable-background="new 0 0 841.9 595.3" xml:space="preserve">
          <g>
            <path fill="#61DAFB" d="M666.3,296.5c0-32.5-40.7-63.3-103.1-82.4c14.4-63.6,8-114.2-20.2-130.4c-6.5-3.8-14.1-5.6-22.4-5.6v22.3   c4.6,0,8.3,0.9,11.4,2.6c13.6,7.8,19.5,37.5,14.9,75.7c-1.1,9.4-2.9,19.3-5.1,29.4c-19.6-4.8-41-8.5-63.5-10.9   c-13.5-18.5-27.5-35.3-41.6-50c32.6-30.3,63.2-46.9,84-46.9l0-22.3c0,0,0,0,0,0c-27.5,0-63.5,19.6-99.9,53.6   c-36.4-33.8-72.4-53.2-99.9-53.2v22.3c20.7,0,51.4,16.5,84,46.6c-14,14.7-28,31.4-41.3,49.9c-22.6,2.4-44,6.1-63.6,11   c-2.3-10-4-19.7-5.2-29c-4.7-38.2,1.1-67.9,14.6-75.8c3-1.8,6.9-2.6,11.5-2.6l0-22.3c0,0,0,0,0,0c-8.4,0-16,1.8-22.6,5.6   c-28.1,16.2-34.4,66.7-19.9,130.1c-62.2,19.2-102.7,49.9-102.7,82.3c0,32.5,40.7,63.3,103.1,82.4c-14.4,63.6-8,114.2,20.2,130.4   c6.5,3.8,14.1,5.6,22.5,5.6c27.5,0,63.5-19.6,99.9-53.6c36.4,33.8,72.4,53.2,99.9,53.2c8.4,0,16-1.8,22.6-5.6   c28.1-16.2,34.4-66.7,19.9-130.1C625.8,359.7,666.3,328.9,666.3,296.5z M536.1,229.8c-3.7,12.9-8.3,26.2-13.5,39.5   c-4.1-8-8.4-16-13.1-24c-4.6-8-9.5-15.8-14.4-23.4C509.3,224,523,226.6,536.1,229.8z M490.3,336.3c-7.8,13.5-15.8,26.3-24.1,38.2   c-14.9,1.3-30,2-45.2,2c-15.1,0-30.2-0.7-45-1.9c-8.3-11.9-16.4-24.6-24.2-38c-7.6-13.1-14.5-26.4-20.8-39.8   c6.2-13.4,13.2-26.8,20.7-39.9c7.8-13.5,15.8-26.3,24.1-38.2c14.9-1.3,30-2,45.2-2c15.1,0,30.2,0.7,45,1.9   c8.3,11.9,16.4,24.6,24.2,38c7.6,13.1,14.5,26.4,20.8,39.8C504.7,309.8,497.8,323.2,490.3,336.3z M522.6,323.3   c5.4,13.4,10,26.8,13.8,39.8c-13.1,3.2-26.9,5.9-41.2,8c4.9-7.7,9.8-15.6,14.4-23.7C514.2,339.4,518.5,331.3,522.6,323.3z    M421.2,430c-9.3-9.6-18.6-20.3-27.8-32c9,0.4,18.2,0.7,27.5,0.7c9.4,0,18.7-0.2,27.8-0.7C439.7,409.7,430.4,420.4,421.2,430z    M346.8,371.1c-14.2-2.1-27.9-4.7-41-7.9c3.7-12.9,8.3-26.2,13.5-39.5c4.1,8,8.4,16,13.1,24C337.1,355.7,341.9,363.5,346.8,371.1z    M420.7,163c9.3,9.6,18.6,20.3,27.8,32c-9-0.4-18.2-0.7-27.5-0.7c-9.4,0-18.7,0.2-27.8,0.7C402.2,183.3,411.5,172.6,420.7,163z    M346.7,221.9c-4.9,7.7-9.8,15.6-14.4,23.7c-4.6,8-8.9,16-13,24c-5.4-13.4-10-26.8-13.8-39.8C318.6,226.7,332.4,224,346.7,221.9z    M256.2,347.1c-35.4-15.1-58.3-34.9-58.3-50.6c0-15.7,22.9-35.6,58.3-50.6c8.6-3.7,18-7,27.7-10.1c5.7,19.6,13.2,40,22.5,60.9   c-9.2,20.8-16.6,41.1-22.2,60.6C274.3,354.2,264.9,350.8,256.2,347.1z M310,490c-13.6-7.8-19.5-37.5-14.9-75.7   c1.1-9.4,2.9-19.3,5.1-29.4c19.6,4.8,41,8.5,63.5,10.9c13.5,18.5,27.5,35.3,41.6,50c-32.6,30.3-63.2,46.9-84,46.9   C316.8,492.6,313,491.7,310,490z M547.2,413.8c4.7,38.2-1.1,67.9-14.6,75.8c-3,1.8-6.9,2.6-11.5,2.6c-20.7,0-51.4-16.5-84-46.6   c14-14.7,28-31.4,41.3-49.9c22.6-2.4,44-6.1,63.6-11C544.3,394.8,546.1,404.5,547.2,413.8z M585.7,347.1c-8.6,3.7-18,7-27.7,10.1   c-5.7-19.6-13.2-40-22.5-60.9c9.2-20.8,16.6-41.1,22.2-60.6c9.9,3.1,19.3,6.5,28.1,10.2c35.4,15.1,58.3,34.9,58.3,50.6   C644,312.2,621.1,332.1,585.7,347.1z" />
            <polygon fill="#61DAFB" points="320.8,78.4 320.8,78.4 320.8,78.4  " />
            <circle fill="#61DAFB" cx="420.9" cy="296.5" r="45.7" />
            <polygon fill="#61DAFB" points="520.5,78.1 520.5,78.1 520.5,78.1  " />
          </g>
          <title>React in use</title>
        </svg>
      </div>
      <?php include "templates/footer-inner.html" ?>
    </footer>
  </div>
</body>


</html>