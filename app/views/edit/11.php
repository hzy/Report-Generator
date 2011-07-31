<div id="main_content_rhs_wide">
	<h2>Report Edit</h2>
	<h3>Terms &amp; Conditions</h3>
	<hr />
	<form method="post">
		<div class="form_fields">
			<input type="hidden" name="report_id" value="<?php h($report->id) ?>">
			<input type="hidden" name="section" value="11">
		
			<textarea name="data[terms]"><?php if($data['terms']): h($data['terms']) ?><?php else: ?>1. This estimate is based upon the current cost of labour and materials and is subject to variation should these items be increased.
2. This estimate is based upon the assumption that our operatives will be able to complete the work contracted for during a continuous uninterrupted period. Should the client interrupt work, delay completion, or require separate stages to undertake the work, then any additional cost or loss to us would be chargeable to the client.
3. This estimate is open for acceptance for a period of three months from its issue after which time we reserve the right to adjust or withdraw.
4. We reserve to ourselves the exclusive right to make during the progress of the work, any variation in design, materials or proposals in the application of our systems, which in our opinion will improve the working of the system.
5. The client or their agent prior to the arrival of our operatives on site must clear rooms in which work shall take place of all furniture, floor coverings and effects. Any furniture floor coverings and effects remaining will be entirely at the clients risk and we cannot accept any responsibility for any accidental or unavoidable damage caused to any items remaining in the area of work.
6. In the event of party walls requiring work the client is legally bound to notify the neighbouring owners/occupiers of the intended work to the party wall and to comply with all current relevant legislation. We shall deem this to have taken place unless advised to the contrary in writing.
7. Any additional recommendations contained in our report are offered as guide and are in no way binding as a structural survey. If there is any doubt with regard to any of the reports content then consult with your own professional structural surveyor or seek further clarification prior to any contractual commitment.
8. In the event of the Building Control Officer becoming involved any deviation or additional work which he may require could result in a variation of the estimate.
9. Should any unforeseen problems or circumstances arise during the course of our work we reserve the right to cease to proceed until such time as appropriate further arrangements are made and agreed.
10. Whilst all reasonable care will be taken there is a slight risk of discolouration to ceilings etc. following timber treatments and no responsibility can be accepted should this occur.
11. Where wall construction is not visible our estimate is based upon the assumption that the wall is conventional solid brickwork. Other methods of construction could result in the adjustment or withdrawal of our estimate.
12. We will not be responsible for failure to report upon the state or condition of any timber or wall surface which is covered up or inaccessible to us at the time of our inspection. In premises which are occupied or where floor coverings are present at the time of our inspection our report should not be regarded as conclusive proof that the full extent of any decay, infestation or rising damp has been established. Where a survey has been limited in any way, any estimate provided should not be relied upon for the negotiation of a sale or purchase price of a property.
13. In the absence of any special arrangement for payment between the company and the client, invoices will be rendered upon completion of the work and are payable either immediately to our operatives or within seven days.
14. When applicable no guarantee will be issued until such time as our account has been paid in full and all cheques cleared. Any additional banking charges incurred by us due to dishonoured cheques will be chargeable to the client, together with an administration cost.
15. Any account that is not paid in full in accordance with our terms will attract interest at 4% above the current base rate on the outstanding balance.
16. A cancellation charge of 5% of the contract value will be made if a job has been booked to commence and is delayed, postponed or cancelled by the client within 48 hours of the commencement date.
				<?php endif; ?>
			</textarea>
		</div>
	
		<?php include "edit_nav.php" ?>
	</form>
</div>